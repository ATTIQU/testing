<?php 
require($_SERVER['DOCUMENT_ROOT'].'/vendor/mailer/PHPMailerAutoload.php');


function smtp_gmails($to_m, $from_m, $subject, $message){
	$tt =& get_instance();
	if(!isset($tt->email)){
		$tt->load->library("email");
	}
	
	$config = array();
	$config['protocol'] = 'sendmail';
	$config['charset'] = 'utf-8';
	$config['mailtype'] = 'html';
	$config['priority'] = 1;
	//$config['wordwrap'] = TRUE;
	$to = $to_m["email"];
	$to_label = $to_m["label"];
	
	$from = $from_m["email"];
	$from_label = $from_m["label"];
    //if(empty($from)){
		//$from = "noreply@".$_SERVER['HTTP_HOST'];
		//$from_label = $_SERVER['HTTP_HOST'];
	//}
	$tt->email->initialize($config);
	$tt->email->set_header('MIME-Version', '1.0');
	$tt->email->set_header('Content-Transfer-Encoding', 'base64');
	
	$tt->email->from('noreply@'.$_SERVER['HTTP_HOST'], 'TREA');
	$tt->email->to($to,$from_label);
	$tt->email->subject($subject);
	$tt->email->message($message);
	
	return ($tt->email->send())? true:false;
}


function mailer1($data){
	$message = isset($data["message"]) ? $data["message"]: "no data";
	$sbj = isset($data["subject"]) ? $data["subject"]: "no subject";
	$to = $data["to"];
	 		
	$tt = &get_instance();
	if(!isset($tt->email)){
		//$tt->load->library("email");
	}
	$config['mailtype'] = 'html';
	$config['charset'] = 'iso-8859-1';	
	$tt->email->initialize($config);
	$tt->email->from('noreply@gmail.com', 'Jeba');
	$tt->email->to($to);
	$tt->email->subject($sbj);	
	$tt->email->message($message);
	$m = $tt->email->send();
	if($m){
		return true;
	}
	return false;
	}
	
	
function mailer($to,$subject,$message){
	
	$tt = &get_instance();
	if(!isset($tt->email)){
		$tt->load->library("email");
	}
	
	$config = array();
	$config['protocol'] = 'sendmail';
	$config['charset'] = 'utf-8';
	$config['mailtype'] = 'html';
	$config['priority'] = 1;
	//$config['wordwrap'] = TRUE;

	$tt->email->initialize($config);
	$tt->email->set_header('MIME-Version', '1.0');
	$tt->email->set_header('Content-Transfer-Encoding', 'base64');
	
	$tt->email->from('noreply@'.$_SERVER['HTTP_HOST'], 'JEBA');
	$tt->email->to($to);

	$tt->email->subject($subject);
	
	$tt->email->message($message);
	
	return ($tt->email->send())? true:false;
}

function smtp_gmail($to_m, $from_m, $subject, $message){
	$ci =& get_instance();
	//$adm = $ci->db->order_by('id','asc')->get_where("content_creator")->row();
	//$from = (isset($adm->email)) ? $adm->email : "";
	date_default_timezone_set('Etc/UTC');
	$to = $to_m["email"];
	$to_label = $to_m["label"];
	$from = $from_m["email"];
	$from_label = $from_m["label"];
	$mail = new PHPMailer(true);
	try {
		$mail->addReplyTo("noreply@".$_SERVER['HTTP_HOST'], $to_label);
		if(is_array($to)){
			foreach($to as $k){
				$mail->addAddress($k, $to_label);
			}
		}else{
			$mail->addAddress($to, $to_label);
		}
		//$mail->SetFrom($from, $from_label);
		//From email address and name
		$mail->From = $from;
		$mail->FromName = $from_label;
		$mail->WordWrap = 50;               // set word wrap
		$mail->Priority = 1; 
		$mail->IsHTML(true);  
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->Send();
	} 
	catch (phpmailerException $e) {
  		echo $e->errorMessage(); 
	} catch (Exception $e) {
  		echo $e->getMessage(); 
	}
	
}

?>