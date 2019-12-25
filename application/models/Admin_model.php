<?php


	class Admin_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}


		// Admin Login
		public function admin_login($adminData){

			$where = array('username'=>$adminData['username'],'password'=>md5($adminData['password']));

			$result = $this->db->where($where)->get('admin');

			if($result->num_rows()){
				return true;
			}
			else{
				return false;
			}

		}


	}


?>