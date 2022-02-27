<?php
$ciphering = "AES-128-CTR";
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';

// Store the encryption key
$encryption_key = "ROCTOPUS_NFC_SKEY";

$response = ['status' => 'error','message' => 'Invalid request'];

if(isset($_GET['en']) && !empty($_GET['en']) && isset($_GET['s'])){
	$s = $_GET['s'];
	if(!empty($s)){
		// Use openssl_encrypt() function to encrypt the data
		$encryption = openssl_encrypt($s, $ciphering,$encryption_key, $options, $encryption_iv);
		if($encryption){
			$response = ['status' => 'success','data' => urlencode($encryption)];
		}else{
			$response = ['status' => 'error','message' => 'Processing failed'];
		}
	}else{
		$response = ['status' => 'error','message' => 'Invalid request data'];
	}
	
}

if(isset($_GET['de']) && !empty($_GET['de']) && isset($_GET['s'])){
	$s = urldecode($_GET['s']);
	if(!empty($s)){
		$decryption = openssl_decrypt ($s, $ciphering,$encryption_key, $options, $encryption_iv);
		if($decryption){
			$response = ['status' => 'success','data' => $decryption];
		}else{
			$response = ['status' => 'error','message' => 'Processing failed'];
		}
	}else{
		$response = ['status' => 'error','message' => 'Invalid request data'];
	}
}


echo json_encode($response);
?>