<?php
class Userpanel extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	 	$this->load->helper('mailer'); 
		//echo $this->uri->segment(1);
		//$this->lang->load('en','english');

		if(isset($_GET['logout']) && $_GET['logout'] == true){
			$this->session->unset_userdata('user_session');
			redirect(base_url('/Front/login'));
		}
		
		if(empty($this->session->userdata('user_session')) and $this->uri->segment(2) != 'login'){
			redirect(base_url('/Front/login'));
		}
		
		if(isset($_GET['lang'])){
			if($_GET['lang']=="ar"){
				$this->session->unset_userdata('lang');
				$_SESSION['lang']="ar";
				header("location:". $_SERVER['HTTP_REFERER']);
			}else{
				$_SESSION['lang']="en";
				header("location:". $_SERVER['HTTP_REFERER']);
			}
		}
		
		$this->load->helper('common');
		$this->load->helper('language');
	}
public function index(){
	$this->load->view('userpanel/index');
	}
public function addagreement(){
	if(isset($_POST['add_agreement'])){
		$data=array();
		$data['receiver_id']=$_POST['connection'];
		$data['title']=$_POST['title'];
		$data['description']=$_POST['description'];
		$data['sender_id']=$_SESSION['user_session'];
		$data['dated']=date('y-m-d');
		
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg|pdf|doc|docx';
					$config['max_size'] = '100000';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('error_msg','Image Upload Error: '.$upload_error);
					}
		}
				
			if( empty($this->session->flashdata('error_msg'))){
				$agreement=$this->db->insert('agreements',$data);
				if($agreement){
				$this->session->set_flashdata('success_msg','Agreement Created successfully');
				redirect(base_url('userpanel/agreementlist'));
				}else{
					$this->session->set_flashdata('error_msg','Problem while Created Agreement');
				redirect(base_url('userpanel/agreementlist'));
				}
				
			}
		}	
	//end if statment
	$this->load->view('userpanel/addagreement');
	}
public function agreementlist(){
	$this->load->view('userpanel/agreementlist');
	}
public function editagreement($id){
	if(isset($_POST['edit_agreement'])){
		$data=array();
		$data['receiver_id']=$_POST['connection'];
		$data['title']=$_POST['title'];
		$data['description']=$_POST['description'];
		$data['dated']=date('y-m-d');
		
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg|pdf|doc|docx';
					 $config['max_size'] = '100000';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('error_msg','Image Upload Error: '.$upload_error);
					}
		}
				
			if( empty($this->session->flashdata('error_msg'))){
				$id=$this->uri->segment(3);
				$this->db->where('id',$id);
				$update_agreement=$this->db->update('agreements',$data);
				if($update_agreement){
				$this->session->set_flashdata('success_msg','Agreement Updated successfully');
				redirect(base_url('userpanel/agreementlist'));
				}else{
					$this->session->set_flashdata('error_msg','Problem while updating Agreement');
				redirect(base_url('userpanel/agreementlist'));
				}
			}
		}	
	$this->load->view('userpanel/editagreement');
	}
	public function viewagreement(){
		
	$this->load->view('userpanel/viewagreement');	
	}
public function delete_agreement(){
	$id=$this->uri->segment(3);
	$this->db->where('id',$id);
	$this->db->delete('agreements');
	$this->load->view('userpanel/agreementlist');
	}
public function entities(){
	$this->load->view('userpanel/entities');
	}
public function addadvertisement(){
	if(isset($_POST['advertisement'])){
		$data=array();
		$user_id=$this->session->userdata('user_session');
		 $data['type']=$_POST['type'];
		$data['title']=$_POST['title'];
		$data['link']=$_POST['link'];
		$data['added_by']='User';
		$data['added_id']=$user_id;
		$data['status']='Pending';
		$data['check_status']='Disable';
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('error_msg','Image Upload Error: '.$upload_error);
					}
				}
				
			if( empty($this->session->flashdata('error_msg'))){
				$adds=$this->db->insert('adver_manage',$data);
				if($adds){
				$this->session->set_flashdata('success_msg','Advertisement Created successfully');
				redirect(base_url('userpanel/listadvertisement'));
				}else{
					$this->session->set_flashdata('error_msg','Problem while Created Advertisement');
				redirect(base_url('userpanel/listadvertisement'));
				}
				
			}
		}	
	
	$this->load->view('userpanel/addadvertisement');
	}
	public function editAdvertisement(){
	if(isset($_POST['advertisement'])){
		$data=array();
		$user_id=$this->session->userdata('user_session');
		 $data['type']=$_POST['type'];
		$data['title']=$_POST['title'];
		$data['link']=$_POST['link'];
		$data['added_by']='User';
		$data['added_id']=$user_id;
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('error_msg','Image Upload Error: '.$upload_error);
					}
				}
				
			if( empty($this->session->flashdata('error_msg'))){
				$id=$this->uri->segment(3);
				$this->db->where('id',$id);
				$this->db->update('adver_manage',$data);
				$this->session->set_flashdata('success_msg','Advertisement Updated successfully');
				redirect(base_url('userpanel/listadvertisement'));
				
				if($this->db->affected_rows() > 0){
					
					//redirect(base_url('/groups'));
				}else{
					$this->session->set_flashdata('error_msg','Problem while Updating Advertisement');
				}
			}
		}	
	
	$this->load->view('userpanel/editAdvertisement ');
	}
	public function delete_advertisement(){
		 $seg3=$this->uri->segment(3);
		 $seg4=$this->uri->segment(4);
		if($seg3=="delete" &!empty($seg4)){
			$this->db->where('id',$seg4);
			$this->db->delete('adver_manage');
			redirect(base_url('userpanel/listadvertisement'));
			
		}
	}
public function listadvertisement(){
	$this->load->view('userpanel/listadvertisement');
	}
public function paymentreports(){
	$this->load->view('userpanel/paymentreports');
	}
public function mycontacts(){
	$this->load->view('userpanel/mycontacts');
	}
public function  profilesetting($id){
		  if(isset($_POST['submit'])){
			 $data = $this->input->post();
			$checkbox = $this->input->post('sector');
		//print_r($data);
			unset($data['submit']);
			$data['sector'] = json_encode($checkbox);
			$this->db->where('id', $id);
			$add = $this->db->update('addcutomer', $data);
		if($add){
			$this->session->set_flashdata('feedback', 'Your Profile  Updated successfully');
			$this->session->set_flashdata('class','text-green');
			}else{
			$this->session->set_flashdata('feedback', 'Your Profile Not Updated successfully');
			$this->session->set_flashdata('class','text-pink');

				}	
		
		 }
	//end if statment
	$this->load->view('userpanel/profilesetting');
	}
public function update_password(){
	if(isset($_POST['submit'])){	
	$id = $_SESSION['user_session'];
	$upadte = $this->db->where('id',$id)->get('addcutomer')->row();
	if($upadte->pass == $_POST['o_pass']){
	if($_POST['n_pass'] == $_POST['r_pass']){
		$pass = $this->db->where('id',$id)->update('addcutomer',['pass'=>$_POST['n_pass']]);
	if($pass > 0){
		
		}else{
			//echo 'error';
			}
		$this->session->set_flashdata('feedback', 'Your Password Updated successfully');
			$this->session->set_flashdata('class','text-green');
	}else{
			$this->session->set_flashdata('feedback', 'New and Repeat password Not Match');
			$this->session->set_flashdata('class','text-pink');
	}
	
	}else{
		$this->session->set_flashdata('feedback', 'Old And New Password Not Matched');
			$this->session->set_flashdata('class','text-pink');
	
	
	 }
		}
	$this->load->view('userpanel/update_password');
	}
public function resetpass(){
	$this->load->view('userpanel/resetpass');
	}
public function pconnections(){
	$this->load->view('userpanel/pconnections');
	}
public function txndetail(){
	$this->load->view('userpanel/txndetail');
	}
public function businessdetails(){
	$this->load->view('userpanel/businessdetails');
	}
public function select12345update($receiver_id ){
	$arr= array('status'=>'error','message'=>'Invalid');
	
	$sender_id=$_SESSION['user_session'];
	$data=array();
	$data['sender_id']=$sender_id;
	$data['receiver_id']=$receiver_id;
	$data['status']=0;
	$data['dated']=date('y-m-d');
	$checkdata=$this->db->get_where('request',['receiver_id'=>$receiver_id,'sender_id'=>$receiver_id])->num_rows();
	;
	
			if($checkdata > 0){
	$arr= array('status'=>'success','message'=>'Request Allready Send');
				}else{
					$update3456 = $this->db->insert('request',$data);
		if($update3456){
	$arr= array('status'=>'success','message'=>'Request Send successfully');
			}else{
	$arr= array('status'=>'error','message'=>'Request Not Send successfully');
		}
					
					}
			
		
	echo json_encode($arr);
		}
public function dellcon($id){
	$this->db->where('sender_id',$id)->delete('request');
	echo $this->db->last_query();
	redirect('Userpanel/pconnections');
	}
	public function requestAccept(){
		$id=$this->uri->segment(3);
		$accept=$this->db->get_where('request',['id'=>$id])->row();
		$data=array();
		
		$data['sender_id']=$accept->sender_id;
		$data['receiver_id']=$accept->receiver_id;
		$data['dated']=date('y-m-d');
		$add=$this->db->insert('contacts',$data);
		$this->db->where('id',$id);
		$this->db->delete('request');
		redirect(base_url('Userpanel/pconnections'));
		
		
	}
	public function requestReject(){
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('request');
		redirect(base_url('Userpanel/pconnections'));
		
		
	}
}


	
	
	

 ?>
