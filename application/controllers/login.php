<?php
	class login extends CI_Controller {
		public function index(){
			$this->load->view('Template/login');
		}

		public function validate(){
			//echo $this->input->post('username');
			//echo $_post['username'];
			//redirect('catalog','refresh');
			$this->load->model('userModel');

			$this->userModel->validate();
		}
	}
?>