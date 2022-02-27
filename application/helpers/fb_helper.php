<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/Facebook/autoload.php');

function fb_config(){
	$FB = new \Facebook\Facebook([
		'app_id' => '2274538056160916',
		'app_secret' => '47a45616f351e2e713882281ec447155',
		'default_graph_version' => 'v2.10'
	]);
	
	return $FB->getRedirectLoginHelper();
	
}

function fbauth(){
	$FB = new \Facebook\Facebook([
		'app_id' => '2274538056160916',
		'app_secret' => '47a45616f351e2e713882281ec447155',
		'default_graph_version' => 'v2.10'
	]);
	
	return $FB->getOAuth2Client();
}

function FBB(){
	return $FB = new \Facebook\Facebook([
		'app_id' => '2274538056160916',
		'app_secret' => '47a45616f351e2e713882281ec447155',
		'default_graph_version' => 'v2.10'
	]);
}



?>