<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Front extends CI_Controller
{
	 public $_api_context;
	public function __construct(){
	parent::__construct();
		
	    $this->load->model('FrontM');
		
		}
	
	
	
	
	
	public function check_login(){
		$user_id=$this->session->userdata('User_session');
		if(!isset($user_id) &&  empty($user_id)){
			redirect(base_url());
		}
		
	}
	public function index()
	{
		$this->load->view('front/index/index');
	}
	public function contact_SendInfo() {  
		
            
	if(isset($_POST['email'])){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
		$messagee = $this->input->post('message');
        // name validation
        if(empty(trim($name))){
            $res=['status' => 'error','message' => 'Please enter  name'];
        }
		
        // email validation
        elseif(empty(trim($email))){
			 $res=['status'=>'error','message'=> 'Please enter email address'];
            
        }
        // check email validation
        elseif ($this->validateEmail($email) == FALSE) {
			 $res=['status'=>'error','message'=> 'Please enter valid email address'];
           
        }        
        
		 elseif(empty($messagee)){
			 $res=['status'=>'error','message'=> 'Please enter Your Message'];
            
        }

        if(!isset($res) || $res['status'] != 'error'){
           
           $config['mailtype'] = 'html';
	$config['charset'] = 'iso-8859-1';
			
			
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from($email, 'Roctopus Customer Support');
		
		//admin contact email
		$emailTo ='umair28007@gmail.com';
		$subject ='Roctopus Customer Support';
		
		$this->email->to($emailTo);
			$message = 'A new message received: <br><br>
		Name: '.$name.'<br>
		Email: '.$email.'<br>
		Subject: '.$subject.'<br>
		Message: '.$messagee;
		$this->email->message($message);
		$this->email->subject($subject);
			
            $status = $this->email->send();
            $this->email->clear(TRUE);
             
            if(!empty($status)){
				
			$res = ['status' => 'success','message' => 'Thank you for Contacting Us, we will get back to you soon.'];
	}else{
		$res = ['status' => 'error','message' => 'Problem while sending email, Please try again later.'];
		}
				
                      
        }else{
			
		}
		}else{$res = ['status' => 'error','message' => 'Invalid Submission'];}
    
		echo json_encode($res);
    }

	public function products()
	{
		
		$this->load->view('front/product/products');
	}
	public function terms()
	{
		
		$this->load->view('front/term/term');
	}
	public function news()
	{
		
		$this->load->view('front/news/news');
	}
	public function news_detail()
	{
		
		$this->load->view('front/news/news_detail');
	}

	public function faq()
	{
		
		$this->load->view('front/faqs/faqs');
	}
	
	public function contact()
	{
		
		$this->load->view('front/contact/contact');
	}
	public function about()
	{
		
		$this->load->view('front/about/about');
	}
	public function services()
	{
		
		$this->load->view('front/services/services');
	}
	public function login()
	{
		
		$this->load->view('front/login/login');
	}
	public function my_account()
	{
		
		$this->load->view('front/account/my_account');
	}
	public function wishlist()
	{
		
		$this->load->view('front/wishlist/wishlist');
	}
	public function error_404()
	{
		
		$this->load->view('front/error_404/error_404');
	}
		public function compare()
	{
		
		$this->load->view('front/compare/compare');
	}
		public function privacy_policy()
	{
		
		$this->load->view('front/privacy/privacy');
	}
	public function coming_soon()
	{
		
		$this->load->view('front/comingsoon/comingsoon');
	}
	
	public function blog_details()
	{
		
		$this->load->view('front/blog/blogdetails');
	}
	public function blog()
	{
		
		$this->load->view('front/blog/blog');
	}
	public function blog_sidebar()
	{
		$this->load->view('front/blog/blogsidebar');
	}
	
	public function shop_fullwidth()
	{
		$this->load->view('front/shop/shop_fullwidth');
	}
	public function shop_fullwidth_list()
	{
		$this->load->view('front/shop/shop_fullwidth_list');
	}
	public function shop_right_sidebar()
	{
		$this->load->view('front/shop/shop_right_sidebar');
	}
	
	public function shop_left_sidebar()
	{
		$this->load->view('front/shop/shop_left_sidebar');
	}
	public function shop_list()
	{
		$this->load->view('front/shop/shop_list');
	}
	public function shop()
	{
		$this->load->view('front/shop/shop');
	}
	public function portfolio()
	{
		$this->load->view('front/portfolio/portfolio');
	}
	public function portfolio_detail()
	{
		$this->load->view('front/portfolio/portfolio_detail');
	}
	public function cart()
	{
		$this->load->view('front/cart/cart');
	}
	
	public function checkout()
	{
		$this->load->view('front/cart/checkout');
	}
	
	
	public function product_details()
	{
		$this->load->view('front/product/product_details');
	}
	public function product_gallery()
	{
		$this->load->view('front/product/product_gallery');
	}
	public function product_sidebar()
	{
		$this->load->view('front/product/product_sidebar');
	}
	public function variable_product()
	{
		$this->load->view('front/product/variable_product');
	}
	public function product_grouped()
	{
		$this->load->view('front/product/product_grouped');
	}
	public function index2()
	{
		$this->load->view('front/index/index2');
	}
	
	public function index3()
	{
		$this->load->view('front/index/index3');
	}
	
	
	
	
	



	
	
	
	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'User_session'=>0);
		$this->session->set_userdata($session_data);
		
	redirect(base_url());
	}
	
	
	///cc images update

	
	
public function checking_email_template(){
	$this->load->view('email-templates/emailverification');
}
	

	public function signin()
	{
	
	
		$this->load->view('front/login/login.php');
	}
	
	public function send_email() {  
		
          
	if(isset($_POST['email'])){
        
		 $msg = $this->input->post('message');
        $email = $this->input->post('email');
		$subject = 'Send Email'; 
        
        // name validation
        if(empty(trim($email))){
			
            $ress=['status' => 'error','message' => 'Please enter email address'];
        }
		
		  // check email validation
        elseif ($this->validateEmail($email) == FALSE) {
			 $ress=['status'=>'error','message'=> 'Please enter valid email address'];
           
        }    
        // email validation
        elseif(empty(trim($msg))){
			 $ress=['status'=>'error','message'=> 'Please enter Message'];
            
        }
        if(!isset($ress) || $ress['status'] != 'error'){
           
           $config['mailtype'] = 'html';
	$config['charset'] = 'iso-8859-1';
			
			
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from($email, 'TREA Contact');
		
		//admin contact email
		$emailTo ='umair28007@gmail.com';
		
		$this->email->to($emailTo);
			$message = 'A new message received: <br><br>
		Message: '.$msg.'<br>
		Email: '.$email.'<br>
		Subject: '.$subject.'<br>';
		$this->email->message($message);
		$this->email->subject($subject);
			//moving file
			
            $status = $this->email->send();
            $this->email->clear(TRUE);
             
            if(!empty($status)){
				
			$ress = ['status' => 'success','message' => 'Thank you for Sending Email, we will get back to you soon.'];
	}else{
		$ress = ['status' => 'error','message' => 'Problem while sending email, Please try again later.'];
		}
				
                      
        }else{
			
		}
		}else{$ress = ['status' => 'error','message' => 'Invalid Submission'];}
    
		echo json_encode($ress);
    }
	

  
    
	
	

	

}
	
	


