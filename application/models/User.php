<?php
class User extends CI_Model{
	
	function add_payment_transaction($data){
		$this->db->insert('payment_report',$data);
		return $this->db->affected_rows();
	}
	
	function get_user_info($user_id,$select='*'){
		return $this->db->select($select)->get_where('members',['id' => $user_id])->row();
	}
	
	function update_user_info($user_id,$data){
		$this->db->where('id',$user_id)->update('members',$data);
		return $this->db->affected_rows();
	}
	
	function send_verification_email($user_id){
		$query1 = $this->db->get_where('members',['id' => $user_id]);
		if($query1->num_rows() > 0){
			$userData = $query1->row();
			$to = $userData->email;
			$subject = 'Account verification email - JEBA';
			
			$mailData['token'] = encode_token($userData->id);
			$mailData['user_id'] = $userData->id;
			
			$message = $this->load->view('front/en/email-templates/email-verification',$mailData,true);
			
			$mailing = mailer($to,$subject,$message);
			return true;
		}
		return false;
	}
	
	function get_transaction($id){
		return $this->db->get_where('payment_report',['id' => $id])->row();
	}
	
	function get_transactions($user_id){
		$this->db->order_by('id','desc');
		return $this->db->get_where('payment_report',['user_id' => $user_id])->result();
	}
	
	function get_membership_transactions($user_id){
		$this->db->order_by('id','desc');
		$this->db->where('type','subscription');
		$this->db->where('status','completed');
		$this->db->limit(1);
		return $this->db->get_where('payment_report',['user_id' => $user_id])->row();
	}
	
	
	function update_transaction($id,$data){
		$this->db->where('id',$id);
		$this->db->update('payment_report',$data);
		return $this->db->affected_rows();
	}
	
	
	function get_expiry(){
		return date('Y-m-d', strtotime('+1 year'));
	}
	
	
	//subscription
	function check_user_subscription($user_id){
		//checking transactions
		$transactions = $this->db->query("SELECT * FROM payment_report WHERE type='subscription' AND user_id = '".$user_id."' AND status = 'completed' AND expiry >= '".date('Y-m-d')."' ORDER BY id DESC LIMIT 1");
		return ($transactions->num_rows() == 1)?true:false;
	}
	
	function validate_user_subscription(){
		if(isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])){
			$_SESSION['user_membership'] = $this->check_user_subscription($_SESSION['user_session']);
		}
		
		
		if(isset($_SESSION['user_membership']) && (empty($_SESSION['user_membership']) || $_SESSION['user_membership'] != 1)  && in_array($this->uri->segment(2),$this->paid_pages)){
			redirect(base_url('Userpanel/subscribe'));
		}
	}
	
	function get_payment_setting(){
		return $this->db->get_where('visa_configure',['id' => 1])->row();
	}
	
	//advertisement
	
	function get_advertisement($id,$select='*'){
		return $this->db->select($select)->get_where('adver_manage',['id' => $id])->row();
	}
	
	function get_advertisements_by_user($user_id){
		return $this->db->get_where('adver_manage',['added_by' => 'User', 'added_id' => $user_id])->result();
	}
	
	function update_advertisement($id,$data){
		$this->db->where('id',$id);
		$this->db->update('adver_manage',$data);
		return $this->db->affected_rows();
	}
	
	function check_advert_payment($user_id,$advert_id){
		return ($this->db->get_where('payment_report',['user_id' => $user_id,'advert_id' => $advert_id, 'type' => 'advertisement', 'status' => 'completed'])->num_rows())?true:false;
	}
	
	//Admin Import
	
	function checkSector($sector,$parent=0){
		$checking = $this->db->get_where('business',['business' => $sector,'parent' => $parent]);
		if($checking->num_rows() > 0){
			return $checking->row()->id;
		}else{
			//add sector
			$this->db->insert('business',['business' => $sector,'parent' => $parent]);
			if($this->db->affected_rows() > 0){
				return $this->db->insert_id();
			}
		}
		return false;
	}
	
	function checkCountry($country,$parent=0){
		$checking = $this->db->get_where('apps_countries',['country_name' => $country]);
		if($checking->num_rows() > 0){
			return $checking->row()->id;
		}else{
			//add sector
			$this->db->insert('apps_countries',['country_name' => $country]);
			if($this->db->affected_rows() > 0){
				return $this->db->insert_id();
			}
		}
		return false;
	}
	
	function checkUserByEmail($email){
		return $this->db->get_where('members',['email' => $email])->num_rows();
	}
	
}
?>