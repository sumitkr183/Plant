<?php

	class Admin extends CI_controller{

		public function __construct(){
			parent::__construct();

			// Load Model
			$this->load->model('Admin_model');
		}

		// Aadmin Login Page
		public function index(){

			if(!empty($this->session->userdata('user'))){
				redirect('dashboard/');
			}

			$this->load->view('admin/login');
		}


		// Admin Login
		public function login_form(){

			// If Login Form is Set
			if($this->input->post()){

				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required');

				if($this->form_validation->run()==true){
					
					$adminData = array();

					$adminData['username'] = $this->input->post('username');
					$adminData['password'] = $this->input->post('password');

					$result = $this->Admin_model->admin_login($adminData);

					if($result == true){
						$this->session->set_userdata('user',$this->input->post('username'));

						redirect('dashboard/');
					}
					else{
						$this->session->set_flashdata('error','Username or Password is Invalid');

						return redirect('admin/');
					}


				}
				
				$this->index();
			}
			// If Login Form is Not Set
			else{

				redirect('admin/');
			}

		}




	}


?>