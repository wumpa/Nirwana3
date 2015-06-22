<?php

	class Sale extends CI_Controller{
	
		public function index(){
			$this->viewSale();
		}

		public function viewSale(){
			$this->load->model('Sale_Model');

			$data['title'] = 'Nirwana Online Stage | On Sale';
			$data['main_content'] = 'Main_Content/Sale';
			$data['type'] = 'On Sale!';

			$data['records'] = $this->Sale_Model->getData();

			$this->session->set_flashdata('dir','Sale');

			$this->load->view('Page/Base', $data);
		}
	}
?>