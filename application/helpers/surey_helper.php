<?php
function getquestionid($id){
	$thiss =& get_instance();
	                 $thiss->db->where('survey_id',$id);
	                 $query = $thiss->db->get('questions');
					 $ret = $query->row();
	                 if(isset($ret) and !empty($ret)){
						 return $ret->id;
					 }else{
						  return 0;
					 }
					 
	
	
	
}
function get_program_page($t){
	$thiss =& get_instance();
	return $thiss->db->order_by('page_sort','asc')->where('program_submenu',$t)->get('pages')->result_array();
	}

 ?>