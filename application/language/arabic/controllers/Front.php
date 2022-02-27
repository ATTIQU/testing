<?php 
class Front extends Ci_Controller{
	//$this
public function __construct(){
	
	parent::__construct();
	
		//echo $this->uri->segment(1);
		$this->load->model('FrontM');
		//$this->lang->load('en','english');
		$this->load->helper('language');
	
		if(!isset($_SESSION['lang'])){
			$_SESSION['lang']="en";
		}
		if(isset($_GET['lang'])){
			if($_GET['lang']=="ar"){
				$this->session->unset_userdata('lang');
				$_SESSION['lang']="ar";
				header("location:". $_SERVER['HTTP_REFERER']);
			}else{
				$_SESSION['lang']="en";
				header("location:". $_SERVER['HTTP_REFERER']);
			}
		}
		/*if($this->uri->segment(1)=='ar'){
			$this->lang->load('ar','arabic');
			$_SESSION['lang_prefix'] = 'ar';
		}else{
			$this->lang->load('en','english');
			$_SESSION['lang_prefix'] = 'en';
		}*/
	$this->load->helper('surey');	
	$this->load->helper('common');
	$this->load->library('pagination');
	}
	
public function index(){
	$seo['result'] = $this->db->get('seosetting')->row();
	//print_r($seo['result']); die;
	//$this->load->view('front/'.$_SESSION['lang'].'/index',$seo);
	$this->load->view('front/en/index',$seo);
}
	

public function aboutus(){
	
	//$this->load->view('front/'.$_SESSION['lang'].'/aboutus');
	$this->load->view('front/en/aboutus');
}
	

function pagedetails($name){
	$newname = urldecode($name);
	$data['result'] = $this->FrontM->findd(array('tb' => 'pages' , 'where' => 'page_name' , 'prefex' => $newname));

	$this->load->view('front/en/pagedetail',$data);
}


public function newslist(){
	//$this->load->view('front/'.$_SESSION['lang'].'/newslist');
	$this->load->view('front/en/newslist');
}
public function events($type='all-events'){
	$data['event_type'] = $type;
	$this->load->view('front/en/events',$data);
	}
public function eventsdetail(){
	$this->load->view('front/en/eventsdetail');
	}
public function membership(){
	$this->load->view('front/en/membership');
	}
public function abouteurope(){
	$this->load->view('front/en/abouteurope');
	}
public function advertisewithus(){
	$this->load->view('front/en/advertisewithus');
}
	
public function contact(){
	
	$this->load->view('front/en/contact');
	}
	
public function contactSubmit(){
	$res = ['status' => 'error','message' => 'Invalid Submission'];
	if(isset($_POST['email']) && isset($_POST['g-recaptcha-response'])){
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		
		$secret = $this->db->select('g_secret_key')->where('id',1)->get('generalsetting')->row()->g_secret_key;
		
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
		
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from($email, 'JEBA Contact');
		
		//admin contact email
		$emailTo = $this->db->select('contact_email')->get_where('generalsetting')->row()->contact_email;
		
		$this->email->to($emailTo);
		
		$this->email->subject($subject);
		
		$message = 'A new message received: <br><br>
		Name: '.$name.'<br>
		Email: '.$email.'<br>
		Subject: '.$subject.'<br>
		Message: "<br>
'.$message.'<br>"<br><small>Sent from: '.base_url('front/contact').'</small>';
		
		$this->email->message($message);
	
		if($this->email->send()){
			$res = ['status' => 'success','message' => 'Thank you for contacting us, we will get back to you soon.'];
		}else{
			$res = ['status' => 'error','message' => 'Problem while sending email, Please try again later.'];
		}
		}else{
			//recpatcha error
			$res = ['status' => 'error','message' => 'Invalid Recaptcha'];
		}

	
	}
	
	echo json_encode($res);
}
	
public function program($program_type_id,$program_detail_id=false){
	$data['program_type_id'] = $program_type_id;
	$data['program_detail_id'] = $program_detail_id;
	$this->load->view('front/en/program',$data);
}
public function programdetail(){
	$this->load->view('front/en/program_detail');
}

public function aboutpum(){
	$this->load->view('front/'.$_SESSION['lang'].'/aboutpum');
	}
public function pumapplication(){
	//$homepage = file_get_contents('E:/Xampp/htdocs/jeba/assets/pumapplication.pdf');
//echo $homepage;
$mypdf = base_url().'assets/pumapplication.pdf';
  //$handle = fopen($mypdf, 'a') or die('Cannot open file:  '.$mypdf);
  //$data = fread($handle,filesize($mypdf));
  //fclose($handle);
  //one more
  $file = $mypdf;
  $file_name = 'pumapplication.pdf';
  header('Content-type : application/pdf');
  header('Content-Disposition : inline ; filename"'.$file_name.'"');
  header('Content-Transfer-Encoding : binary');
  header('Accept-Ranges : bytes');
  @readfile($file);
  //file_get_contents($mypdf);

	}
public function pumexecuted(){
	$homepage1 = file_get_contents('E:/Xampp/htdocs/jeba/assets/pumexicutedprojects.pdf');
echo $homepage1;
	}
public function pumrules(){
	$this->load->view('front/'.$_SESSION['lang'].'/pumrules');
	}
public function vromapplication(){
	$homepage2 = file_get_contents('E:/Xampp/htdocs/jeba/assets/45c51520-1b6c-4363-9b05-9d4d412d8a2e.pdf');
echo $homepage2;
	}
public function newsaboutpum(){
	$this->load->view('front/'.$_SESSION['lang'].'/newsaboutpum');
	}
public function vromrules(){
	$this->load->view('front/'.$_SESSION['lang'].'/vromrules');
	}
public function newsaboutvrom(){
	$this->load->view('front/'.$_SESSION['lang'].'/newsaboutvrom');
	}
public function vromexicuteable(){
	$this->load->view('front/'.$_SESSION['lang'].'/vromexicuteable');
	}
public function boardofdirectores(){
	$this->load->view('front/en/boardofdirectores');
	}
public function staff(){
	$this->load->view('front/en/staff');
	}
public function detailofbdirectors(){
	$this->load->view('front/'.$_SESSION['lang'].'/detailofbdirectors');
	}
public function postdetail(){
	$this->load->view('front/en/postdetail');
	}
public function eventdetail(){
	$this->load->view('front/en/eventdetail');
	}
public function netherlands(){
	$this->load->view('front/'.$_SESSION['lang'].'/netherlands');
	}
public function business(){
	$this->load->view('front/business');
	}
public function bankers(){
	$this->load->view('front/'.$_SESSION['lang'].'/bankers');
	}
public function enviroment(){
	$this->load->view('front/'.$_SESSION['lang'].'/enviroment');
	}
public function aboutvrom (){
	$this->load->view('front/'.$_SESSION['lang'].'/aboutvrom');
	}
public function externaltrade(){
	$this->load->view('front/'.$_SESSION['lang'].'/externaltrade');
	}
public function nationaldays(){
	$this->load->view('front/'.$_SESSION['lang'].'/nationaldays');
	}
public function countryprofile(){
	$this->load->view('front/en/countryprofile');
	}
public function importantlinks(){
	$this->load->view('front/'.$_SESSION['lang'].'/importantlinks');
	}
public function theformer(){
	$this->load->view('front/'.$_SESSION['lang'].'/theformer');
	}
public function european(){
	$this->load->view('front/'.$_SESSION['lang'].'/european');
	}
public function pakistande(){
	$this->load->view('front/'.$_SESSION['lang'].'/pakistande');
	}
public function register(){
if(isset($_POST['submit'])){
$data = $this->input->post();
		$checkbox = $this->input->post('sector');
		//print_r($data);
		unset($data['submit']);
		
	
if(!empty($data['pass']) && !empty($data['cpass']) && $data['pass'] == $data['cpass']){
	
		$data['sector'] = json_encode($checkbox);
	unset($data['cpass']);
 		$email_check = $this->db->where('email',$data['email'])->get('addcutomer')->num_rows();
		
			if($email_check > 0){
					$this->session->set_flashdata('feedback', 'Email Already Exist');
					$this->session->set_flashdata('class','text-pink');
					//die;
			}else{
$addcate = $this->db->insert('addcutomer',$data);
				//echo $this->db->last_query().'<br>';
				
if($addcate){
	$this->session->set_flashdata('feedback', 'Congrats You Are Registered successfully, Please login <a href="'.base_url('Front/login').'">Here</a>');
	$this->session->set_flashdata('class','text-green ');
//redirect('Front/question/'.$_GET['id']);
	unset($_POST);
}else{
//insert query else	
	$this->session->set_flashdata('feedback', 'Error While Registration,Please try again!');
	$this->session->set_flashdata('class','text-pink');
	}
	}
}else{
	$this->session->set_flashdata('feedback', 'Password Error: Password and Confirm password must be same.');
	$this->session->set_flashdata('class','text-pink');
}
	}//end of email check
	//end if statment
	
	$this->load->view('front/en/register');
	}
public function login(){
	if(!empty($this->session->userdata('user_session'))){
			redirect(base_url('Admin'));
		}
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
		//geting data
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$query = $this->db->get_where("addcutomer", array('email'=>$email,'pass'=>$password))->row();
		if($query){
		$query->id;
		$this->session->set_userdata('user_session',$query->id);
		//redirect (base_url('Home'));
		$this->session->set_flashdata('feedback', 'You Logged In Successfully');
		$this->session->set_flashdata('class','text-green');
		header("Refresh:0; url=/Userpanel");
		}else{
			$this->session->set_flashdata('feedback', 'Your Email Or Password Is Incorrect ,Please Try Again');
		$this->session->set_flashdata('class','text-pink');
		redirect('Front/login');
		}
	}else{
		//redirect('/Home/admin_login');
		//$this->load->view('/front/login');
		//echo validation_errors();
	}
	
	$this->load->view('front/en/login');
	
}
public function logout(){
	$this->session->unset_userdata('user_session');
		redirect('/Front/'.$_SESSION['lang'].'/login');
	
}

	
public function agreements($agreement_type='jeba'){
	$data['agreement_type'] = $agreement_type;
	switch($agreement_type){
		case 'jeba':
			$data['agreement_title'] = db_word(59);
			break;
		case 'international':
			$data['agreement_title'] = db_word(60);
	}
	
	$this->load->view('front/en/agreements',$data);
}


public function test(){
	echo "here";
		$this->load->library('encryption');
		$this->load->helper('token');
		$user_id = 4;
		$token = token_encode($user_id);
		echo "<br><br>";
		print_r($token);
}


public function forgetpass(){
//echo "here";
//$this->load->library('encryption');
//$this->load->helper('token');
//$user_id = 4;
//$token = token_encode($user_id);
//die;
$data = [];

if(isset($_POST['submit'])){

$email = $this->input->post('email');

$check = $this->db->select('id')->get_where('addcutomer',['email' => $email]);
if($check->num_rows() > 0){
	$user_id = $check->row()->id;

$this->load->library('encryption');

$this->load->helper('token');

$token = token_encode($user_id);

$link = base_url('Front/password_reset/'.$token.'/'.$user_id);
//echo $link;
	
	$this->load->helper('mailer');
	$message = 'Dear Member,<br> In response to your password reset request, we generated a Secure Password Reset Link where you can reset your password. Please click <a href="'.$link.'">here</a> to reset your password.<br>If you didn\'t made this request, please ignore this request. <br><hr>Sent From: JEBA - '.base_url('front/forgetpass').'  ';
	
	$mailing = mailer($email,'Password reset link - JEBA Account',$message);
	

	if($mailing){
		$data['success'] = 'We have sent Password Reset Link to your Email, Please check your inbox.';
	}else{
		$data['error'] = 'Unkown Error Occured, Please try again later!';
	}
}else{
	$data['error'] = 'Your Account Deosn\'t Exists on JEBA.';
}
}



$this->load->view('front/en/forgetpass',$data);



}

		
function password_reset($token,$user_id){

$this->load->library('encryption');

$this->load->helper('token');

$decoded = token_decode($token);
$decoded = json_decode($decoded, true);	
//print_r($decoded);
if(!empty($decoded) and $decoded["user_id"] == $user_id){

$now = time();

if($decoded['expiry_time'] <= $now){

if(isset($_POST['submit'])){
	 $password = $_POST['password'];
	 $password2 = $_POST['c_password'];
	
	if($password==$password2){
		//print_r($decoded); die;
		$cPass = $this->db->select('pass')->get_where('addcutomer',['id' => $decoded['user_id']])->row()->pass;
		if($cPass == $password){
			$decoded['success'] = '<h2>Your Password has been successfully reset. please login <a href="'.base_url('front/login').'">Here</a>.</h2>';
		}else{
			//save to db
			$this->db->where('id',$decoded['user_id']);
			$this->db->update('addcutomer',['pass' => $password]);

			if($this->db->affected_rows() > 0){
				$decoded['success'] = '<h2>Your Password has been successfully reset. please login.</h2>';
				//header( "refresh:3;url=".base_url('Front') ); die;
			}else{
				$decoded['error'] = '<h2>Unknown Error occured while reseting your password, Please try again.</h2>';
				//header( "refresh:3;url=".base_url('/Front/forgetpass') ); die;
			}
		}
	}else{
		$decoded['error'] = '<h2>Confirm Password Dose Not Matched.</h2>';
		
	}
}
$this->load->view('front/en/password_reset',$decoded);

}else{

	redirect(base_url('?error=Link Expired, Please try again') ); die;
	
}

}else{

	//redirect('Invalid Request');
	redirect(base_url('?error=Link Expired, Please try again.Invalid Request') ); die;

	//header( "refresh:5;url=".base_url() );

}

}
public function countrydetail(){
	$this->load->view('front/en/countrydetail');
	}
public function survey(){
	$this->load->view('front/'.$_SESSION['lang'].'/survey');
	}
public function surveydetail($questionid,$surveyid){
	$this->db->where('id',$questionid);
			$this->db->where('survey_id',$surveyid);
			$data['result'] = $this->db->get('questions')->result_array();
	
	$this->load->view('front/'.$_SESSION['lang'].'/surveydetail',$data);
	}
public function services(){
	$this->load->view('front/'.$_SESSION['lang'].'/services');
	}
public function thankyou(){
	$this->load->view('front/'.$_SESSION['lang'].'/thankyoupage');
	}

public function internationalagree(){
	$this->load->view('front/'.$_SESSION['lang'].'/internationalagree');
}
public function circulation(){
		$this->load->view('front/en/circulation');
	
	}
public function links(){
	$this->load->view('front/en/links');
	
	}
public function dailyclipping(){
	$this->load->view('front/en/dailyclipping');
	}

	public function gallery($media_type='all'){
		$data['media_type'] = $media_type;
		$this->load->view('front/en/gallery',$data);
	}
	
	public function annual_reports(){
		$this->load->view('front/en/annual_report');
	}
	
	public function newsletter($id = false){
		if($id==false){
			$this->load->view('front/en/newsletter');
		}else{
			$this->load->view('front/en/newsletter-single',['id' => $id]);
		}
		
	}
	
	public function magazines(){
		$this->load->view('front/en/magazines');
	}
	
	public function publications(){
		$this->load->view('front/en/publications');
	}
	
	public function initiatives($id = false){
		if($id==false){
			$this->load->view('front/en/initiatives');
		}else{
			$this->load->view('front/en/initiative-single',['id' => $id]);
		}
	}
	
	
	function getSubSectors(){
		echo '<option value="">Select Sub-Sector</option>';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$this->db->where('parent',$id);
			$res = $this->db->get('business')->result();
			foreach($res as $k=>$v){
				echo '<option value="'.$v->id.'">'.$v->business.'</option>';
			}
		}
	}
	
}




?>