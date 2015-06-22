<?php

	class Login extends CI_Controller {

		public function index(){
			$data['title'] = 'Nirwana Online Stage | Catalog';
			if ($this->sessionIsOn() =='true') redirect('');
			else $this->load->view('Page/Login', $data);
		}

		public function sessionIsOn(){
			if ($this->session->userdata('username') == NULL ){
				return 'false';
			} else return 'true';
		}

		public function validate(){

			$this->load->model('User_Model');
			$this->User_Model->validate();

			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
	
?>
