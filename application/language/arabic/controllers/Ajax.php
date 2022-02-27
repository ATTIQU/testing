<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	
	public function index()
	{
		
	}
	function get_types_by_program(){
		echo '<option value="">Select Program Type</option>';
		if(isset($_GET['program']) && !empty($_GET['program'])){
			$query = $this->db->get_where('program_types',['type' => $_GET['program']])->result_array();
			foreach($query as $k=>$v){
				echo '<option value="'.$v['id'].'">'.$v['title'].'</option>';
			}
		}
	}
}
