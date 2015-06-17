<?php

	class Login extends CI_Controller {
		public function index(){

			$this->load->view('Page/Login');
		}

		public function validate(){

			$this->load->model('User_Model');
			$this->User_Model->validate();
		}
	}
	
?>