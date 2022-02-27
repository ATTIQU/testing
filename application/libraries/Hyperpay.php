<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* make sure to have table 'visa_configure' with proper values;
*/

class Hyperpay{
	var $test_base_url = 'https://test.oppwa.com/';
	var $live_base_url = 'https://oppwa.com/';
	var $base_url;
	var $url;
	var $accessToken; // = 'OGFjN2E0Y2E2ZjNiYWU5NzAxNmY1NWI2MmU0YzMxOTh8Qk1HbThHSnJ5UA==';
	var $entityID; // = '8ac7a4ca6f3bae97016f55b6fa35319c';
	var $testMode = 'EXTERNAL';
	var $currency = 'JOD';
	var $paymentType = 'DB';
	var $paymentMethods = ['VISA','MASTER'];
	var $production; // = false; //set to true in production
	var $config;
	var $ci;
	
	function __construct(){
		$this->ci =& get_instance();
		$this->config = $this->ci->db->get_where('visa_configure',['id' => 1])->row();
		$this->accessToken = $this->config->access_token;
		$this->entityID = $this->config->entity_id;
		$this->base_url = ($this->config->payment_mode == 'Live')? $this->live_base_url:$this->test_base_url;
		$this->production = ($this->config->payment_mode == 'Live')? true:false;
		$this->url = $this->base_url.'v1/checkouts';
	}
	
	function curl_request($url,$data='',$type='GET'){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Authorization:Bearer '.$this->accessToken));
		if($type=='POST'){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}else{
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		}
		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->production); // this should be set to true in production
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$responseData = curl_exec($ch);
		if(curl_errno($ch)) {
		return curl_error($ch);
		}
		curl_close($ch);
		return $responseData;
	}
	
	function checkout_request($input){
		$data = "entityId=".$this->entityID .
		"&testMode=".$this->testMode .
		"&amount=".$input['amount'] .
		"&currency=".$this->currency .
		//"&descriptor=".$input['id'] .
		"&customer.email=".$input['email'] .
		"&paymentType=".$this->paymentType .
		"&merchantTransactionId=".$input['id'];
		//"&paymentType=".$this->paymentType;
		
		$request = $this->curl_request($this->url,$data,'POST');
		$response = json_decode($request);
		if(isset($response->id)){
			return $response;
		}
		return false;
	}
	
	function checkout_callback_request($id,$resourcePath){
		$url = $this->base_url.$resourcePath."?entityId=".$this->entityID;
		$request = $this->curl_request($url);
		$response = json_decode($request);
		if(isset($response->id)){
			return $response;
		}
		return false;
	}
	
	
}
?>