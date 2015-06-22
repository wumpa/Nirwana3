<?php

	class Registration extends CI_Controller {
		public function index(){

			if ($this->sessionIsOn() == 'false') {
				$data['title'] = 'Nirwana Online Stage | Catalog';

				$this->load->view('Page/Registration', $data);
			} else redirect('');
		}

		public function sessionIsOn(){
			if ($this->session->userdata('username') == NULL ){
				return 'false';
			} else return 'true';
		}

		public function createUser(){

			$this->load->model('User_Model');
			$this->User_Model->createUser();

			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
	
?>
