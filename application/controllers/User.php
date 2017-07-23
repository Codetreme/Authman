<?php
	defined('BASEPATH') or exit('No Direct access allowed');

	/*
	 * Class User
	 *@extends CI_Controller

	*/
	class User extends CI_Controller{
		/**
		 * __construct function.
		 * 
		 * @access public
		 * @return void
		 */

		public function __construct(){
			parent::__construct();

			$this->load->model('User_model','users');
			//$this->load->model('Currencies','currencies');
			$this->load->helper('form');
			$this->load->library('form_validation');
		}

		public function registration(){
		/**
	 		* register function.
			* @access public
		    * @return void
		 */
			$this->load->model('User_model');
			$data=array();


				// form validations
			$this->form_validation->set_rules('firstname','firstname','trim|alpha_numeric|required|min_length[4]');
			$this->form_validation->set_rules('lastname','lastname','trim|alpha_numeric|required|min_length[4]');
			$this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('contact','contact','trim|required');
			$this->form_validation->set_rules('password','password','trim|required|min_length[6]');
			$this->form_validation->set_rules('confirm_password','confirm_password','trim|required|min_length[6]|matches[password]');

			if($this->form_validation->run()===false):
				//If validation is has errors return to view with errors
				$data['page']='user/registration';
				$this->load->view('template',$data);

				else:
					//assign variables

					$firstname=$this->input->post('firstname');
					$lastname=$this->input->post('lastname');
					$contact=$this->input->post('contact');
					$email=$this->input->post('email');
					$password=$this->input->post('password');

						// create a user
					if($this->User_model->new_user($firstname,$lastname,$contact,$email,$password)):
						$data['page']='user/registration_success';
						$this->load->view('template',$data);
						
						else:
							//user creation failed 
							$data->error='There was a problem creating this User. Please try again';
							//$this->load->view('user/registration',$data);
							$this->load->view('template',$data);
					endif;
			endif;


			
		}
		public function login(){
			/**
			 * login function
			 * @access public
			 * @return void
			 * 
			*/
				//$this->load->model('Currency');
			$this->load->model('User_model');

			$data= array();
			//$data['page_header']='Currency Portal';
			$data['title']='Third Way';

			$this->load->helper('form');
			$this->load->library('form_validation');
			//$this->load->model('Currencies');

			//$data= new stdClass();

			$this->form_validation->set_rules('email','email','required|valid_email');
			$this->form_validation->set_rules('password','password','required');

			if($this->form_validation->run()==false):
				$data['page']='user/login';
				$this->load->view('template',$data);

			else:
				$email=$this->input->post('email');
				$password=$this->input->post('password');

					if($this->User_model->user_login($email,$password)):
						//$data['currencies'] = $this->currencies->getCurrency();
						$user_details=$this->User_model->getUserDetails($email);
						//die(print_r($user_details));
						if($user_details):

							$session_data=array();
							foreach ($user_details as $detail ) :
								$session_data= $arrayname =( array(
							 		'id'=>$detail->id,
							 		'firstname'=>$detail->firstname,
							 		'lastname'=>$detail->lastname,
							 		'contact'=>$detail->contact,
							 		'email'=>$detail->email,
									'profile'=>$detail->profile));

							 	$this->session->set_userdata('logged_in',$session_data);
							endforeach;		
						
						endif;
						//$data['user_details']='';
						$data['page']='user/login_success';
						$this->load->view('template',$data);
				else:
					$data['error']='The was an error logging in';
				$data['page']='user/login';
					$this->load->view('template',$data);
				endif;
			endif;
		}
		public function account(){

			if($this->session->userdata('logged_in')):
				$session_data = array();
				//$data = array();

				$session_data=$this->session->userdata('logged_in');
				$data['id']=$session_data['id'];
				$data['firstname']=$session_data['firstname'];
				$data['lastname']=$session_data['lastname'];
				$data['contact']=$session_data['contact'];
				$data['email']=$session_data['email'];
				$data['profile']=$session_data['profile'];

				//$username=$this->session->userdata('username');
				//$user_id=$this->session->userdata('id');
				//$data['user']=$username;
				//$data['user_id']=$user_id;

				$data['page']='user/account';
				$this->load->view('template',$data);
			endif;
		}
		public function logout() {
			$data =array();
			//$this->session->unset_userdata('email','id');
			$this->session->sess_destroy();
			//$data['page']='index';
				redirect(site_url());
		}
		
		
	}
