<?php 

class Admin extends Ci_Controller{

public function __construct(){

	parent::__construct();

	$this->load->library("email");	
	
	if(isset($_GET['logout'])){
		unset($_SESSION['admin_session']);
		redirect(base_url('/Admin/login'));
	}

	if(empty($this->session->userdata('admin_session')) and $this->uri->segment(2) != 'login'){

			redirect(base_url('/Admin/login'));

	}

	

	}

	function processCountryProfile($page,$country){
		$checking = $this->db->get_where('country',['country_name' => $country]);
		if($checking->num_rows() > 0){
			echo  base_url().'Admin/addcountry?edit='.$checking->row()->id;
		}else{
			if($page == 'edit'){
				echo  base_url().'Admin/addcountry';
			}else{
				echo '0';
			}
		}
	}
	
public function index(){

		$this->load->view('admin/index');

		}
		///Countries
		public function addCountries(){

		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

	
				$saving = $this->db->insert('apps_countries', $data);
			
		if($saving){

		$this->session->set_flashdata('feedback', 'Country Added successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Adding Counrty');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}


//end email check

	//end if statment

	

	$this->load->view('admin/addcountry1');
	}
	//edit
	public function editCountries($id){
		if(isset($_POST['edit'])){

			 $data = $this->input->post();

			 unset($data['edit']);

			$this->db->where('id', $id);



			$saving = $this->db->update('apps_countries', $data);

echo $this->db->last_query(); die;
			
		if($saving){

		$this->session->set_flashdata('feedback', 'Country Updated successfully');
         
		$this->session->set_flashdata('class','alert alert-success');
		
redirect(base_url('admin/listcountries'));
		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Updating Counrty');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}


//end email check

	//end if statment

	

	$this->load->view('admin/editcountries');
	}
	public function listcountries(){

	$this->load->view('admin/countrieslist');

	}
	public function deleteCountries($id){

	$this->db->where('id',$id)->delete('apps_countries');

		redirect('Admin/listcountries');

	

	}


		//all about costumer

public function addmembers(){

	if(isset($_POST['submit'])){

		$data = $this->input->post();

		$checkbox = $this->input->post('sector');

		//print_r($data);

		unset($data['submit']);

		$data['sector'] = json_encode($checkbox);

		 $email_check = $this->db->where('email',$data['email'])->get('addcutomer')->num_rows();

		

			if($email_check > 0){

					$this->session->set_flashdata('feedback', 'Email Allready Exist');

					$this->session->set_flashdata('class','alert alert-danger');

					//die;

			}else{

		$addcate = $this->db->insert('addcutomer',$data);

		if($addcate){

		$this->session->set_flashdata('feedback', 'Customer Added successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Adding Customer');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

}//end email check

	//end if statment

	

	$this->load->view('admin/addmembers');

	

	}

public function listmembers(){

	$this->load->view('admin/listmembers');

	}
	

public function editcustomer($id){

		  if(isset($_POST['submit'])){

			 $data = $this->input->post();

			$checkbox = $this->input->post('sector');

		//print_r($data);

			unset($data['submit']);

			$data['sector'] = json_encode($checkbox);

			 

		/*	 if($_FILES['userfile']['error']==0){

				 $config['upload_path']          = './uploads/';



				$config['allowed_types']        = 'gif|jpg|png';



				$config['overwrite'] = true;



				$this->load->library('upload', $config);



				if ( ! $this->upload->do_upload('userfile'))



				{



				$error = array('error' => $this->upload->display_errors());



				}



				else



				{



					$dat = $this->upload->data();

					$data['post_thumbnail'] = '/uploads/'.$dat['file_name'];

				



				}

			 }

			*/



			$this->db->where('id', $id);



			$add = $this->db->update('addcutomer', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Customer  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Customer Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/editcustomer');

	

	}

public function dellcustomer($id){

	$this->db->where('id',$id)->delete('addcutomer');

		redirect('Admin/listcustomers');

	

	}

	//all about categorie

public function addcategorie(){

		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

		$addcate = $this->db->insert('business',$data);

		if($addcate){

		$this->session->set_flashdata('feedback', 'Business Added successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Adding Business');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

	//end if statment

	$this->load->view('admin/addcategorie');

	}

public function list_categories(){

	$this->load->view('admin/list_categories');

	}

public function editcategorie($id){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			$this->db->where('id', $id);



			$add = $this->db->update('business', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Business  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Business Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	$this->load->view('admin/editcategorie');	

	}

public function dellcate($id){

	$this->db->where('id',$id)->delete('business');

		redirect('Admin/list_categories');

	}

	//all about Customer Agreements

public function customeragreement(){

	$this->load->view('admin/customeragreement');

	

	}



public function viewcustomeragreement(){

	$this->load->view('admin/viewcustomeragreement');

	}

	//this all baout blog

public function addblog(){

			 if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 //print_r($data);

			 unset($data['submit']);

			

			



			$add =  $this->db->insert('blog',$data);



		if($add){

			$this->session->set_flashdata('feedback', 'Blog Added successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Bolog Not Added successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/addblog');

	}

public function editblog($id){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			$this->db->where('id', $id);



			$add = $this->db->update('blog', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Blog  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Blog Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	$this->load->view('admin/editblog');

	}

public function dellblog($id){

	$this->db->where('id',$id)->delete('blog');

		redirect('Admin/listblog');



	}

public function listblog(){

	$this->load->view('admin/listblog');

	}

	//all about payment

public function paymentsetting(){

	$this->load->view('admin/paymentsetting');

	

	}

public function paymentsettings(){

			  if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			 



			$this->db->where('id', 1);



			$add = $this->db->update('visa_configure', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Visa Configuration  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Visa Configuration Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	

	$this->load->view('admin/paymentsettings');

	}

public function viewpayment(){

	$this->load->view('admin/viewpayment');

	}

	//all about newsletter

public function newsletter(){

	if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

		if(isset($_GET['edit'])){

			$addcate = $this->db->update('newsletter',$data,'id = "'.$_GET['edit'].'"');

			$this->session->set_flashdata('feedback', 'News Letter updated successfully');

			$this->session->set_flashdata('class','alert alert-success');

			redirect(base_url('admin/newsletter?edit='.$_GET['edit']));

		}else{

			$addcate = $this->db->insert('newsletter',$data);

			$this->session->set_flashdata('feedback', 'News Letter Added successfully');

			$this->session->set_flashdata('class','alert alert-success');

			redirect(base_url('admin/newsletter'));

		}

	}

	//end if statment

	$this->load->view('admin/newsletter');

	}

public function subscriberslist(){

	$this->load->view('admin/subscriberslist');

	}

public function newsletterlist(){

	$this->load->view('admin/newsletterlist');

	}

	//email annoucement

public function emailannouncements(){

	$this->load->view('admin/emailannouncements');

	}





	//abuot events

public function addevents(){

		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

			if(isset($_GET['edit']) && !empty($_GET['edit'])){
				$this->db->where('id',$_GET['edit']);
				$saving = $this->db->update('events',$data);
			}else{
				$saving = $this->db->insert('events',$data);
			}
		

		if($saving){

			$this->session->set_flashdata('feedback', 'Event Saved successfully');

			$this->session->set_flashdata('class','alert alert-success');

			//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Saving Event');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

	//end if statment

	$this->load->view('admin/events/addevents');

	}

public function eventslist(){

	$this->load->view('admin/events/eventslist');

	}

public function editevent($id){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			 

		/*	 if($_FILES['userfile']['error']==0){

				 $config['upload_path']          = './uploads/';



				$config['allowed_types']        = 'gif|jpg|png';



				$config['overwrite'] = true;



				$this->load->library('upload', $config);



				if ( ! $this->upload->do_upload('userfile'))



				{



				$error = array('error' => $this->upload->display_errors());



				}



				else



				{



					$dat = $this->upload->data();

					$data['post_thumbnail'] = '/uploads/'.$dat['file_name'];

				



				}

			 }

			*/



			$this->db->where('id', $id);



			$add = $this->db->update('events', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Event  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Event Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	

	$this->load->view('admin/editevent');

	}

public function dellevent($id){

	$this->db->where('id',$id)->delete('events');

		redirect('Admin/eventslist');

	}

//all about news

public function addnews(){

		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);



		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('news',$data);
		}else{
			$data['datee'] = date('Y-m-d');
			$saving = $this->db->insert('news',$data);
		}

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'News Saved successfully');

			$this->session->set_flashdata('class','alert alert-success');

			//redirect('Front/question/'.$_GET['id']);

		}else{

			//insert query else	

			$this->session->set_flashdata('feedback', 'Error While Saving News');

			$this->session->set_flashdata('class','alert alert-danger');

		}

	}

	//end if statment

	

	$this->load->view('admin/news/addnews');

	}

public function newslist(){

	$this->load->view('admin/news/newslist');

	}

public function dellnews($id){

	$this->db->where('id',$id)->delete('news');

		redirect('Admin/newslist');

	}

//all about program
public function programs(){
		if(isset($_GET['del_id']) && !empty($_GET['del_id'])){
			$this->db->where('id',$_GET['del_id']);
			$this->db->delete('main_programs');
			redirect('/admin/programs');
		}
	
		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

		if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
			$this->db->where('id',$_GET['edit_id']);
			$saving = $this->db->update('main_programs',$data);
		}else{
			$saving = $this->db->insert('main_programs',$data);
		}
		

		if($this->db->affected_rows() > 0){

		$this->session->set_flashdata('feedback', 'Data Save Successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Saving Data');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

	//end if statment

	

	$this->load->view('admin/programs/programs');

	}
public function program_types(){
		if(isset($_GET['del_id']) && !empty($_GET['del_id'])){
			$this->db->where('id',$_GET['del_id']);
			$this->db->delete('program_types');
			redirect('/admin/program_types');
		}
		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

		if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
			$this->db->where('id',$_GET['edit_id']);
			$saving = $this->db->update('program_types',$data);
		}else{
			$saving = $this->db->insert('program_types',$data);
		}
		

		if($this->db->affected_rows() > 0){

		$this->session->set_flashdata('feedback', 'Data Save Successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Saving Data');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

	//end if statment

	

	$this->load->view('admin/programs/program_types');

	}

public function addprogram(){

		if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);
				
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('program',$data);
		}else{
			$saving = $this->db->insert('program',$data);
		}

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Program Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

		}else{

			//insert query else	

			$this->session->set_flashdata('feedback', 'Error While Saving Program');

			$this->session->set_flashdata('class','alert alert-danger');

		}

	}

	//end if statment

	

	$this->load->view('admin/programs/addprogram');

	}

public function programlist(){

	$this->load->view('admin/programs/programlist');

	}

public function dellprogram($id){

	$this->db->where('id',$id)->delete('program');

		redirect('Admin/programlist');

	}

//all about survey

public function addsurvey(){

	if(isset($_POST['submit'])){

		$data = $this->input->post();

		//print_r($data);

		unset($data['submit']);

		$addcate = $this->db->insert('survey',$data);

		if($addcate){

		$this->session->set_flashdata('feedback', 'Survey Added successfully');

		$this->session->set_flashdata('class','alert alert-success');

		//redirect('Front/question/'.$_GET['id']);

		}else{

		//insert query else	

		$this->session->set_flashdata('feedback', 'Error While Adding Survey');

		$this->session->set_flashdata('class','alert alert-danger');

			}

	}

	//end if statment

	$this->load->view('admin/addsurvey');

	}

public function surveylist(){

	

	$this->load->view('admin/surveylist');

	}

public function editsurvey($id){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			$this->db->where('id', $id);



			$add = $this->db->update('survey', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Survey  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Survey Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/editsurvey');

	}

public function dellsurvey($id){

	$this->db->where('id',$id)->delete('survey');

	$this->db->where('survey_id',$id)->delete('questions');

		redirect('Admin/surveylist');

	}

//question 

public function questionlist(){

	$this->load->view('admin/questionlist');

	}

public function editquestion($id){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

			$this->db->where('id', $id);



			$add = $this->db->update('questions', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Question  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');

				redirect('Admin/questionlist/'.$id);

			}else{



			$this->session->set_flashdata('feedback', 'Question Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/editquestion');

	

	}

public function dellquestion($id){

	$this->db->where('id',$id)->delete('questions');

	redirect('/Admin/questionlist/'.$id);

	}

public function addquestion(){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

		$id = $data['survey_id'];

			 

			 unset($data['submit']);

			



			$add = $this->db->insert('questions', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Question  Added successfully');

			$this->session->set_flashdata('class','alert alert-success');

				redirect('Admin/questionlist/'.$id);

			}else{



			$this->session->set_flashdata('feedback', 'Question Not Added successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

		$this->load->view('admin/addquestion');

	}

//for advertisment

public function addadvertisement(){

	if(isset($_POST['add_advirsement'])){
		$data=array();
		$user_id=$this->session->userdata('admin_session');
		 $data['type']=$_POST['type'];
		$data['title']=$_POST['title'];
		$data['link']=$_POST['link'];
		$data['added_by']='Admin';
		//$data['added_id']=$user_id;
		$data['status']='Approved';
		$data['check_status']='Enable';
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('feedback','Image Upload Error: '.$upload_error);
						$this->session->set_flashdata('class','alert alert-danger');
						$error = true;
					}
				}
				
			if(!isset($error)){
				$this->db->insert('adver_manage',$data);
				//redirect(base_url('admin/advertisementlist'));
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('feedback','Advertisement created successfully');
					$this->session->set_flashdata('class','alert alert-success');
					//redirect(base_url('/groups'));
				}else{
					$this->session->set_flashdata('error_msg','Problem while creating Advertisement');
					$this->session->set_flashdata('class','alert alert-danger');
				}
			}
		}	
	//end if statment

	

	$this->load->view('admin/addadvertisement');

	}
	public function editAdvertisement(){

	if(isset($_POST['submit'])){
		$data=array();
		$user_id=$this->session->userdata('admin_session');
		 $data['type']=$_POST['type'];
		$data['title']=$_POST['title'];
		$data['link']=$_POST['link'];
		//$data['added_by']='Admin';
		//$data['added_id']=$user_id;
		//$data['status']='Approved';
		//$data['check_status']='Enable';
		if(!empty($_FILES['image']['name'])){
					$config['upload_path']='upload/';
					$config['file_name']=$_FILES['image']['name'];
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$uploadData=$this->upload->data();
						$fileName=$uploadData['file_name'];
						$data['image']=$fileName;
					}else{
						$upload_error = $this->upload->display_errors();
						//var_dump($upload_error);
						$this->session->set_flashdata('feedback','Image Upload Error: '.$upload_error);
						$this->session->set_flashdata('class','alert alert-danger');
						$error = true;
					}
				}
				
			if(!isset($error) ){
				$id=$this->uri->segment(3);
				$this->db->where('id',$id);
				$this->db->update('adver_manage',$data);
				//redirect(base_url('admin/advertisementlist'));
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('feedback','Advertisement created successfully');
					$this->session->set_flashdata('class','alert alert-success');
					//redirect(base_url('/groups'));
				}else{
					$this->session->set_flashdata('feedback','Problem while creating Advertisement');
					$this->session->set_flashdata('class','alert alert-danger');
				}
			}
		}
		$this->load->view('admin/editadvertisement');

	}
	///Accept Function
	public function acceptRequest(){
		$id=$this->uri->segment(3);
		$reject=$this->db->get_where('adver_manage',['id'=>$id])->row();
	$tatus=$reject->status;
		
		if($tatus=='Approved'){
			
			echo "Your approvel Request already Accepted  Your approvel Request already Accepted ";
			$this->session->set_flashdata('Your approvel Request already Accepted');
		}
		else{
		$data=array();
		$id=$this->uri->segment(3);
		$data['status']='Approved';
		$this->db->where('id',$id);
		$this->db->update('adver_manage',$data);
		$this->session->set_flashdata('success_msg','User Approvel request Accept  successfully');
		}
		$this->load->view('admin/advertisementlist');
		
	}
	public function rejectRequest(){
		$id=$this->uri->segment(3);
		
		//$this->db->where('id',$id);
		
			$this->db->where('id',$id);
		$this->db->delete('adver_manage');
		$this->session->set_flashdata('success_msg','User Approvel request Rejected  successfully');
	
		$this->load->view('admin/advertisementlist');
	}
	public function statusDisable(){
		$id=$this->uri->segment(3);
		$data=array();
		$data['check_status']='Disable';
		$this->db->where('id',$id);
		$this->db->update('adver_manage',$data);
		$this->session->set_flashdata('success_msg','Advertisement Status changed successfully');
		$this->load->view('admin/advertisementlist');
	}
	
	public function statusEnable(){
		$id=$this->uri->segment(3);
		$data=array();
		$data['check_status']='Enable';
		$this->db->where('id',$id);
		$this->db->update('adver_manage',$data);
		$this->session->set_flashdata('success_msg','Advertisement changed Status successfully');
		
		$this->load->view('admin/advertisementlist');
	}
		

public function advertisementlist(){

	$this->load->view('admin/advertisementlist');

	}



public function delladvertisement($id){

$this->db->where('id',$id)->delete('adver_manage');

		redirect('Admin/advertisementlist');

}

//all about payments

public function payments(){

	

	$this->load->view('admin/payments');

	}

//all about sub admin

public function addsubadmin(){

	

	$this->load->view('admin/addsubadmin');

	}

public function subadminslist(){

	$this->load->view('admin/subadminslist');

	}

public function editsubadmins($id){

	

	$this->load->view('admin/editsubadmins');

	}

//Notifications (System Alerts)

public function notificationalert(){

	$this->load->view('admin/notificationalert');

	}

//page managment

public function addpage(){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();
			

			 unset($data['submit']);

			



			$add = $this->db->insert('pages',$data);



		if($add){

			$this->session->set_flashdata('feedback', 'Page  Added successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Page Not Added successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	$this->load->view('admin/addpage');

	}

public function pageslist(){

	$this->load->view('admin/pageslist');

	}

public function editpage($id){

			if(isset($_POST['update'])){

			 $data = $this->input->post();

			 /*print_r($data);

			 die;*/

			 unset($data['update']);



			$this->db->where('id', $id);



			$add = $this->db->update('pages', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'page  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Page Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	

	$this->load->view('admin/editpage');

	}

public function dellpage($id){

	$this->db->where('id',$id)->delete('pages');

		redirect('Admin/pageslist');

	}

	//file manager 

public function filemanager(){

	$this->load->view('admin/filemanager');

	}

	//all baout general setting

public function generalsetting(){
	
		if(isset($_POST['submit'])){
				//print_r($_POST); die;
			 $data = $this->input->post();

			 unset($data['submit']);

		



			$this->db->where('id', 1);



			$add = $this->db->update('generalsetting', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'General Setting  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'General Setting  Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/generalsetting');

	}
	public function pageHeaderImage(){
	
		if(isset($_POST['submit'])){
				//print_r($_POST); die;
			 $data = $this->input->post();

			 unset($data['submit']);

		



			$this->db->where('id', 1);



			$add = $this->db->update('static_Page_image', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Header Image Setting  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Header Image Setting  Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/pageHeaderImage');

	}

//seo setting

public function seosetting(){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);

					/*if($_FILES['thumbnail']['error']==0){

				 $config['upload_path']          = './uploads/';



				$config['allowed_types']        = 'gif|jpg|png';



				$config['overwrite'] = true;



				$this->load->library('upload', $config);



				if ( ! $this->upload->do_upload('thumbnail'))



				{



				$error = array('error' => $this->upload->display_errors());

				}

				else



				{

					$dat = $this->upload->data();

					$data['thumbnail'] = '/uploads/'.$dat['file_name'];

				}

			 }

*/

			$this->db->where('id', 1);



			$add = $this->db->update('seosetting', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Seo Setting  Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Seo Setting  Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/seosetting');

}

public function login(){

			if(!empty($this->session->userdata('admin_session'))){

			redirect(base_url('Admin'));

		}

		$this->form_validation->set_rules('email','Email','required');

		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){

		//geting data

		$email = $this->input->post('email');

		$password = $this->input->post('password');

		$query = $this->db->get_where("login", array('email'=>$email,'password'=>$password))->row();

		if($query){

		$query->id;

		$this->session->set_userdata('admin_session',$query->id);

		//redirect (base_url('Home'));

		$this->session->set_flashdata('feedback', 'You Logged In Successfully');

		$this->session->set_flashdata('class','alert alert-success');

		header("Refresh:0; url=/Admin");

		}else{

			$this->session->set_flashdata('feedback', 'Your Email Or Password Is Incorrect ,Please Tty Again');

		$this->session->set_flashdata('class','alert alert-danger');

		redirect('Admin/login');

		}

	}else{

		//redirect('/Home/admin_login');

		//$this->load->view('/front/login');

		//echo validation_errors();

	}

		$this->load->view('admin/login');

	}

public function logout(){

	$this->session->unset_userdata('admin_session');

		redirect('/Admin/login');

	}

public function updateprofile(){

				if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			$this->db->where('id', 1);



			$add = $this->db->update('login', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Profile Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Profile  Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/updateprofile');

	}

	//all about home page setting

public function homepage_setting(){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			



			$add = $this->db->insert('homepage_settings', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Home Page Inserted successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Home Page Not Inserted successfully');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	

	

	

	$this->load->view('admin/homepage_setting');

	}

public function editslider($id){

			if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			

					$this->db->where('id',$id);

			$add = $this->db->update('homepage_settings', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Slider Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');

				redirect('/Admin/homepage_setting?list=editslider&id='.$id);

			}else{



			$this->session->set_flashdata('feedback', 'Slider Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	}

public function dellslider($id){

	$this->db->where('id',$id)->delete('homepage_settings');

	redirect('/Admin/homepage_setting?list=sliderlist');

	}

	

	public function dellcutomer($id){

	$this->db->where('id',$id)->delete('customerlink');

	redirect('/Admin/homepage_setting?list=listcustomers');

	}

public function addcountry(){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);
			
			if(isset($_GET['edit']) && !empty($_GET['edit'])){
				$this->db->where('id',$_GET['edit']);
				$saving = $this->db->update('country', $data);
			}else{
				$saving = $this->db->insert('country', $data);
			}



		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-success');



				}	

			

		 }

	$this->load->view('admin/addcountry');

	}

public function countrylist(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('country');
		redirect('/Admin/countrylist');
	}
	$this->load->view('admin/countrylist');
}


public function addteam(){

	if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			

			$add = $this->db->insert('team', $data);

		if($add){

			$this->session->set_flashdata('feedback', 'Team Inserted successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Team Not Inserted successfully');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	

	$this->load->view('admin/addteam');

	}

public function teamlist(){

$this->load->view('admin/teamlist');	

	}

public function dellteam($id){

	$this->db->where('id',$id)->delete('team');

	$this->load->view('admin/teamlist');

	}

public function editteam($id){

	if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			$this->db->where('id', $id);



			$add = $this->db->update('team', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Team Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Team Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/editteam');

	}
	
public function add_agreement(){

	if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			

			$add = $this->db->insert('about_agreements', $data);

		if($add){

			$this->session->set_flashdata('feedback', 'Agreement Inserted successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Agreement Not Inserted successfully');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	

	$this->load->view('admin/agreements/add_agreement');

	}

public function agreement_list(){

$this->load->view('admin/agreements/agreement_list');	

	}

public function del_agreement($id){

	$this->db->where('id',$id)->delete('about_agreements');

	redirect(base_url('/Admin/agreement_list'));

}

public function edit_agreement($id){

	if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			$this->db->where('id', $id);



			$add = $this->db->update('about_agreements', $data);



		if($add){

			$this->session->set_flashdata('feedback', 'Agreement Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



			}else{



			$this->session->set_flashdata('feedback', 'Agreement Not Updated successfully');

			$this->session->set_flashdata('class','alert alert-success');



				}	

		

		 }

	$this->load->view('admin/agreements/edit_agreement');

	}


public function add_initiative(){

		if(isset($_POST['submit'])){

			 $data = $this->input->post();

			 unset($data['submit']);



			if(isset($_GET['edit']) && !empty($_GET['edit'])){
				$this->db->where('id',$_GET['edit']);
				$add = $this->db->update('initiatives', $data);
			}else{
				$add = $this->db->insert('initiatives', $data);
			}

			

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Scuccessfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data.');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/initiative/add_initiative');

	}

public function initiatives_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('initiatives');
		redirect('/Admin/initiatives_list');
	}
	$this->load->view('admin/initiative/initiatives_list');	
}

/* Media center */
public function add_gallery(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('gallery', $data);
		}else{
			$saving = $this->db->insert('gallery', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/media/add_gallery');

	}

public function gallery_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('gallery');
		redirect('/Admin/gallery_list');
	}
	$this->load->view('admin/media/gallery_list');

}

/* Annual report */
public function add_annual_report(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('annual_report', $data);
		}else{
			$saving = $this->db->insert('annual_report', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/media/add_annual_report');

	}

public function annual_report_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('annual_report');
		redirect('/Admin/annual_report_list');
	}
	$this->load->view('admin/media/annual_report_list');

}
/* circulations */
public function add_circulation(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('circulations', $data);
		}else{
			$saving = $this->db->insert('circulations', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/media/add_circulation');

}

public function circulation_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('circulations');
		redirect('/Admin/circulation_list');
	}
	$this->load->view('admin/media/circulation_list');

}

/* Daily Clipping */
public function add_daily_clipping(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('daily_clipping', $data);
		}else{
			$saving = $this->db->insert('daily_clipping', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/media/add_daily_clipping');

}

public function daily_clipping_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('daily_clipping');
		redirect('/Admin/daily_clipping_list');
	}
	$this->load->view('admin/media/daily_clipping_list');

}

/* Publication */
public function add_publication(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('publications', $data);
		}else{
			$saving = $this->db->insert('publications', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



				}	

		

		 }

	$this->load->view('admin/media/add_publication');

}

public function publications_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('publications');
		redirect('/Admin/publications_list');
	}
	$this->load->view('admin/media/publications_list');

}


/* Magazine */
public function add_magazine(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		if(isset($_GET['edit']) && !empty($_GET['edit'])){
			$this->db->where('id',$_GET['edit']);
			$saving = $this->db->update('magazines', $data);
		}else{
			$saving = $this->db->insert('magazines', $data);
		}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data Saved Successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



			}	

		

		 }

	$this->load->view('admin/media/add_magazine');

}

public function magazines_list(){
	if(isset($_GET['delete']) && !empty($_GET['delete'])){
		$this->db->where('id',$_GET['delete']);
		$this->db->delete('publications');
		redirect('/Admin/magazines_list');
	}
	$this->load->view('admin/media/magazines_list');

}
	
/* Translations */

public function edit_translation(){

	if(isset($_POST['submit'])){
		$data = $this->input->post();
		unset($data['submit']);
		
		//if(isset($_GET['edit']) && !empty($_GET['edit'])){
		$this->db->where('id',$_GET['edit']);
		$saving = $this->db->update('db_words', $data);
		//}
		
		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('feedback', 'Data saved successfully');

			$this->session->set_flashdata('class','alert alert-success');

			}else{

			$this->session->set_flashdata('feedback', 'Problem while saving data');

			$this->session->set_flashdata('class','alert alert-danger');



			}	

		

		 }

	$this->load->view('admin/translations/edit_translation');

}

public function translations_list(){
	
	$this->load->view('admin/translations/translations_list');

}
	
public function about_us(){
	
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$d = json_encode($_POST);
		$a = ['ar_value' => $d];
		$this->db->where('id',7);
		$this->db->update('theme_setting',$a);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('feedback', 'Data Saved Successfully');
			$this->session->set_flashdata('class','alert alert-success');
		}else{
			$this->session->set_flashdata('feedback', 'Problem While Saving Data');
			$this->session->set_flashdata('class','alert alert-danger');
		}
	}
	
	
	
	$this->load->view('admin/about_us');

}

public function contact(){
	
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$d = json_encode($_POST);
		$a = ['ar_value' => $d];
		$this->db->where('id',8);
		$this->db->update('theme_setting',$a);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('feedback', 'Data Saved Successfully');
			$this->session->set_flashdata('class','alert alert-success');
		}else{
			$this->session->set_flashdata('feedback', 'Problem While Saving Data');
			$this->session->set_flashdata('class','alert alert-danger');
		}
	}
	
	
	
	$this->load->view('admin/contact');

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