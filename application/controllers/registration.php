<?php

	class Registration extends CI_Controller {
		public function index(){
			$data['title'] = 'Nirwana Online Stage | Catalog';

			$this->load->view('Page/Registration', $data);
		}
	}
	
?>
