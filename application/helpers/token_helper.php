<?php
function token_encode($str=""){
	$ci=& get_instance();
	$key = $ci->config->item("enc_key");
	
	$expiry_time = time('+24 hours');
	$strArr = array('user_id' => $str, 'expiry_time' => $expiry_time);
	$strArr = json_encode($strArr);
	$code = $key."--".$strArr."--".$key;
	return base64_encode($code);
}

// Decrypt data
function token_decode($str=""){
	$ci=& get_instance();
	$code = base64_decode($str);
	$exp = explode("--",$code);
	$code = (isset($exp[1])) ? $exp[1] : "";
	return $code;
}

?>