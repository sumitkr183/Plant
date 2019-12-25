<?php

	
	class Dashboard extends CI_controller{

		public function __construct(){
			parent::__construct();

			// Load Model
			$this->load->model('Dashboard_model');
		}


		public function index(){

			if(empty($this->session->userdata('user'))){
				return redirect('admin/');
			}

			// Get Latest Added plants
			$data['plants'] = $this->Dashboard_model->get_latest_plants();

			$data['total_house'] = $this->Dashboard_model->get_num_plants_by_category('House');
			$data['total_office'] = $this->Dashboard_model->get_num_plants_by_category('Office');
			$data['total_garden'] = $this->Dashboard_model->get_num_plants_by_category('Garden');
			$data['total_other'] = $this->Dashboard_model->get_num_plants_by_category('Other');

			$this->load->view('dashboard/index',$data);
		}


		// Add Plants
		public function add(){
			$this->load->view('dashboard/add');
		}


		// Add Plants Data
		public function add_plant(){

			if($this->input->post()==true){

				$this->form_validation->set_rules('name','Plant Name','required');
				$this->form_validation->set_rules('type','Plant Type','required');
				$this->form_validation->set_rules('price','Plant Price','required|numeric');
				$this->form_validation->set_rules('category','Plant Category','required');		

                if($this->form_validation->run()==true){

                	$data = array();

                	$data['name'] = $this->input->post('name');
                	$data['type'] = $this->input->post('type');
                	$data['price'] = $this->input->post('price');
                	$data['category'] = $this->input->post('category');
                	$data['description'] = $this->input->post('description');
                	$data['added_date'] = date("Y/m/d");
                	$data['link'] = strtolower(str_replace(' ', '-', $this->input->post('name')));

                	// Upload Image
                	$config['upload_path']          = './uploads/';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['overwrite'] 			= true;

	                $this->load->library('upload', $config);

	                if(!$this->upload->do_upload('file')){

	                	$file_error['error'] = $this->upload->display_errors();                	
						$this->load->view('dashboard/add',$file_error);
	                }
	                else{
	                	$file_data = $this->upload->data();
	                	$data['image'] = $file_data['file_name'];

	                	$result = $this->Dashboard_model->add_plant($data);

	                	if($result == true){
	                		$this->session->set_flashdata('success',$this->input->post('name').' Added Successfully');
	                	}
	                	else{
	                		$this->session->set_flashdata('error',$this->input->post('name').' Added Failed');	                		
	                	}

	                	return redirect('dashboard/add');
	                	
	                }

                }
                else{
                	$this->add();
                }

			}
		}


		// View Plants
		public function view(){

			// Get All Plants
			$data['plants'] = $this->Dashboard_model->get_plants();

			$this->load->view('dashboard/view',$data);
		}


		// Load Update view
		public function update(){

			// Get All Plants
			$data['plants'] = $this->Dashboard_model->get_plants();

			$this->load->view('dashboard/update',$data);
		}


	}


?>