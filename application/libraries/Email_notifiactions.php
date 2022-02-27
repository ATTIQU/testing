<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Email_notifiactions{
var $CI;
	
function __construct()
{
	$this->CI =& get_instance();
	$this->CI->load->model('Customer_model');
	$this->CI->load->helper('mailer_helper');
}	

	
function add_comment_email($post_id,$user_name,$email)
{		
		//checking comment status in enable or disable...
		$this->CI->db->where('id' ,$_SESSION['user_session']);
		$user_data_id = $this->CI->db->get('customer_table')->row();
	    $subject = 'New comment added to your Post'; 
		if($user_data_id->notification_new_comment == 1){
			
		$to_m = ['email' => $email,'label' => $user_name];
		$from_m = ['email' => 'noreply@groupies.vip','label' => 'Groupies'];
		$subject = 'New comment added to your Post'; 
	  //$subject = 'New comment added to POST ID: '.$post_id; //.' - '.$from_m['label'];
		$message = $this->CI->load->view('emailtemplate/comment_added_notification',['username' => $user_name],true);
		 smtp_gmail($to_m, $from_m, $subject, $message);					
		}
	else
		{
			///echo "email error ";
		}
	
		//$insertion_notification = array(
//			'user_id'=>$_SESSION['user_session'],
//			'message'=>$subject, //$user_name. 
//			'type'=>1,
//			'status'=>0,
//			'date_time'=>date('Y-m-d H:i:s')	
//			);
//			$this->CI->db->insert('notification' ,$insertion_notification);
//		
}
	


		
//}

function new_like_added_notification($post_id,$user_name,$email)
{
	
	
	//$data = $this->CI->User->get_user_info($_SESSION['user_session'],'user_name,email,notification_new_like');
//	$id = $_SESSION['user_session'];
//	$username = $data->user_name;
//	$email = $data->email;
//	$notification_new_like = $data->notification_new_like;
//	if($notification_new_like == 1)
//	{
	
	//checking comment status in enable or disable...
		$this->CI->db->where('id' ,$_SESSION['user_session']);
		$user_data_id = $this->CI->db->get('customer_table')->row();
		if($user_data_id->notification_new_like == 1){
			
			$to_m = ['email' => $email,'label' => $user_name];
		$from_m = ['email' => 'noreply@groupies.vip','label' => 'Groupies'];
		$subject = 'New like added to your Post';
	    //$subject = 'New like added to POST ID.'.$post_id;
		$message = $this->CI->load->view('emailtemplate/new_like_added_notification',['user_name' => $user_name],true);
		 smtp_gmail($to_m, $from_m, $subject, $message);
		
		
		}
		else
		{
			//echo "email error";
		}
   // }
		
}
function new_subscribed_notification()
{
	$data = $this->CI->User->get_user_info($_SESSION['user_session'],'user_name,email,notification_new_subscriber');
	$id = $_SESSION['user_session'];
	$username = $data->user_name;
	$email = $data->email;
	$notification_new_subscriber = $data->notification_new_subscriber;
	if($notification_new_subscriber == 1)
	{
		$to_m = ['email' => $email,'label' => $username];
		$from_m = ['email' => 'noreply@groupies.vip','label' => 'Groupies'];
		$subject = 'New subscriber.';
		$message = $this->CI->load->view('emailtemplate/new_sub_notification',['username' => $username],true);
		$sent = smtp_gmail($to_m, $from_m, $subject, $message);
		if($sent)
		{
			echo "";			
		}
		else
		{
			echo "email error ";
		}
}
		

}
function add_bank_notification()
	{
	$data = $this->CI->User->get_user_info($_SESSION['user_session'],'user_name,email,notification_new_comment');
	$id = $_SESSION['user_session'];
	$username = $data->user_name;
	$email = $data->email;
	
	if($data)
	{
		$to_m = ['email' => $email,'label' => $username];
		$from_m = ['email' => 'noreply@groupies.vip','label' => 'Groupies'];
		$subject = 'New Bank Account Added';
		$message = $this->CI->load->view('emailtemplate/new_bank_account_added',['username' => $username],true);
		$sent = smtp_gmail($to_m, $from_m, $subject, $message);
		if($sent)
		{
			echo "";			
		}
		else
		{
			echo "email error ";
		}
}
		
	}
	
	function add_card_notification()
	{
	$data = $this->CI->Customer_model->get_customer_info($_SESSION['customer_session'],'first_name,email');
	$id = $_SESSION['customer_session'];
	$username = $data->first_name;
	$email = $data->email;
	if($data)
	{
		$to_m = ['email' => $email,'label' => $username];
		$from_m = ['email' => 'roctopus.neelumsoft.com','label' => 'NFC'];
		$subject = 'Your payment is successful';
		$message = $this->CI->load->view('emailtemplate/new_card_added',['username' => $username],true);
		$sent = smtp_gmail($to_m, $from_m, $subject, $message);
		if($sent)
		{
			echo "yes";			
		}
		else
		{
			echo "email error ";
		}
     }
		
	}
	
	function add_post_notifiaction($post_id,$user_name,$email)
	{
	//$data = $this->CI->User->get_user_info($_SESSION['user_session'],'user_name,email');
	//$id = $_SESSION['user_session'];
	//$username = $data->user_name;
	//$email = $data->email;
		
	//checking comment status in enable or disable...
		$this->CI->db->where('id' ,$_SESSION['user_session']);
		$user_data_id = $this->CI->db->get('customer_table')->row();	
	$post_adding_notification = $user_data_id->notification_email;
	if($post_adding_notification == 1)
	{
		$to_m = ['email' => $email,'label' => $username];
		$from_m = ['email' => 'noreply@groupies.vip','label' => 'Groupies'];
		$subject = 'New Post added';
		$message = $this->CI->load->view('emailtemplate/new_post_added',['username' => $username],true);
		$sent = smtp_gmail($to_m, $from_m, $subject, $message);
		if($sent)
		{
			echo "";			
		}
		else
		{
			echo "email error ";
		}
     }
	}

}

?>