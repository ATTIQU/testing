<?php

function get_count_sale_by_month(){
	$ci =& get_instance();
	
	$dt1 = date('Y-m');
	$day = date('d');
	$cc = $_SESSION['User_session'];
	$sale_query = $this->db->query("SELECT '".$day."' as day,SUM(`amount`) Sales FROM  payments  WHERE receiver_id='".$day."' AND status=1 AND date like '$dt1-%' ORDER BY date ASC")->result();
	
	$days_count = [];
	//$day = date('d');	
	$str = "[['Day', 'Sales']";
	foreach($sale_query as $sales){
		
		$day = $sales->day;
		$sale = $sales->day;
		if($str != '['){
			$str .= ",";
		}
		$str .= "['".$day."',".$Sales."]";
		
	}
	$str .= "]";
	return $str;
	
	
}





function format_graph($graph_data){
	$day = date('d');	
	$str = "[['Day', 'Sales']";
	
	foreach($graph_data as $day => $count){
		if($str != '['){
			$str .= ",";
		}
		$str .= "['".$day."',".$count."]";
	
	}
	
	$str .= "]";
	return $str;
}




/* Admin Dashboard*/


?>