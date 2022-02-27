<?php

class FrontM extends CI_Model{

	

	  function insert($data){

		     $tb = $data['tb'];

			 unset($data['tb']);

			 $this->db->insert($tb,$data);

			 return $this->db->affected_rows();

			 

		  }
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

		  

		  

		  

		  

      function findd($data){

		  

		  $this->db->where($data['where'],$data['prefex']);

		  return $this->db->get($data['tb'])->row();

		  

		  }		  

		  

	

	

	}





?>