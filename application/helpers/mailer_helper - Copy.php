<?php
require($_SERVER['DOCUMENT_ROOT'].'/mailer/vendor/mailer/PHPMailerAutoload.php');

function smtp_gmail($to_m, $from_m, $subject, $message){
	$ci =& get_instance();
	//$adm = $ci->db->order_by('id','asc')->get_where("users","capability = '1'")->row();
	//$from = (isset($adm->email)) ? $adm->email : "";
	date_default_timezone_set('Etc/UTC');
	$to = $to_m["email"];
	$to_label = $to_m["label"];
	
	$from = $from_m["email"];
	$from_label = $from_m["label"];
	if(empty($from)){
		$from = "noreply@".$_SERVER['HTTP_HOST'];
		$from_label = $_SERVER['HTTP_HOST'];
	}
	
	$mail = new PHPMailer(true); 
	try {
		$mail->headerLine('MIME-Version', '1.0');
		$mail->headerLine('Content-Transfer-Encoding', 'base64');
		$mail->AddReplyTo($from, $from_label);
		$mail->AddAddress($to, $to_label);
		$mail->SetFrom($from, $from_label);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	} 
	catch (phpmailerException $e) {
  		echo $e->errorMessage(); 
	} catch (Exception $e) {
  		echo $e->getMessage(); 
	}
}

?>