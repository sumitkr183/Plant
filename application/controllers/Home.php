<?php

	
	class Home extends CI_controller{

		public function __construct(){
			parent::__construct();

			// Load Dashboard Model
			$this->load->model('Dashboard_model');

			// Load Data in All Views
			$data['house_plants'] = $this->Dashboard_model->get_plants_by_category('house');
			$data['office_plants'] = $this->Dashboard_model->get_plants_by_category('office');
			$data['garden_plants'] = $this->Dashboard_model->get_plants_by_category('garden');
			$data['other_plants'] = $this->Dashboard_model->get_plants_by_category('other');

			$this->load->vars($data);
		}


		public function index(){

			// Get Latest Plants
			$data['latest_plants'] = $this->Dashboard_model->get_latest_plants();

			$this->load->view('home/index',$data);
		}


		// Plants Quick View
		public function view($id=''){

			$output = "";

			$data = $this->Dashboard_model->get_plant_by_id($id);

			foreach ($data as $value) {
				$output.= "<div class='view-product-img'><img src='".base_url()."uploads/".$value['image']."'></div><div class='view-product-text'><h2>".$value['name']."</h2><h3>Price : <span>".$value['price']."</span></h3><h3>Type : <span>".$value['type']."</span></h3><p>".$value['description']."</p></div>";
			}
			
			echo $output;

		}


		public function about(){
			$this->load->view('home/about');
		}


		public function contact(){
			$this->load->view('home/contact');
		}


		public function shop(){

			// All Plants
			$data['plants'] = $this->Dashboard_model->get_plants();

			// Get Latest Plants
			$data['latest_plants'] = $this->Dashboard_model->get_latest_plants();

			$this->load->view('home/shop',$data);
		}


	}


?>