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
	}
	
?>
