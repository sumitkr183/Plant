<?php


	class Dashboard_model extends CI_model{


		public function add_plant($data = array()){

			return $this->db->insert('plants',$data);
		}


		// Get All Plants
		public function get_plants(){

			return $this->db->get('plants')->result_array();
		}


		// Get Latest Added Plants
		public function get_latest_plants(){

			return $this->db->order_by('id','DESC')->limit(6)->get('plants')->result_array();
		}


		// Get Total Plants by Category
		public function get_num_plants_by_category($category = 'Other'){

			$where = array('category'=>ucfirst($category));

			return $this->db->where($where)->get('plants')->num_rows();

		}


		// Get Plants By Id
		public function get_plant_by_id($id){

			$where = array('id'=>$id);

			return $this->db->where($where)->get('plants')->result_array();
		}


		// Get plants by Category
		public function get_plants_by_category($category='Other'){

			$where = array('category'=>ucfirst($category));

			return $this->db->where($where)->get('plants')->result_array();
		}


	}


?>