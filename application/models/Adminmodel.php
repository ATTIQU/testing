<?php

class Adminmodel extends CI_Model{
public function get_setting($key){
		$tb = $this->db->get_where("setting", array("meta_key" => $key))->row();
		return isset($tb->meta_value) ? $tb->meta_value : "";
	}
	function add_setting($data = array()){
		
		foreach($data as $k=>$v){
			$k =($k);
			$v = ($v);
			$g = $this->get_setting($k);
			$row = $this->db->get_where("setting", "meta_key='$k'")->result();
			if (count($row)>0){
				$this->db->update("setting", array("meta_value"=> $v ), "meta_key='$k'");
			$this->session->set_flashdata('success','Setting updated successfully!');
			}else{
				$this->db->insert("setting", array("meta_key"=>$k, "meta_value"=>$v));	
			}
		}
	}
	function fetch_data()
 {
  $this->db->select("transaction_id,payer_name,email,payer_phone,amount,date,receiver_name");
  $this->db->from('payments');
  return $this->db->get();
 }
	function deposite_fetch_data()
 {
  $this->db->select("txn_id,name,email,phone,paid_amount,created");
  $this->db->from('payment_card');
  return $this->db->get();
 }








	

	

	}





?>