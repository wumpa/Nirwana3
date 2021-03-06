<?php

	class Catalog extends CI_Controller{

		public function index(){

			$this->viewAll();
		}

		public function viewAll(){

			$this->load->model('Catalog_Model');

			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'Main_Content/Catalog';
			$data['type'] = 'All Product';

			$data['records'] = $this->Catalog_Model->getData();

			$this->session->set_flashdata('dir','Catalog');

			$this->load->view('Page/Catalog', $data);
		}

		public function manOnly(){

			$this->load->model('Catalog_Model');

			$data['title'] = 'Nirwana Online Stage | Man Only';
			$data['main_content'] = 'Main_Content/Catalog_SearchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->Catalog_Model->getSpecData('Man');

			$this->session->set_flashdata('dir','Catalog/manonly');

			$this->load->view('Page/Catalog', $data);
		}

		public function womenOnly(){

			$this->load->model('Catalog_Model');
			$data['title'] = 'Nirwana Online Stage | Women Only';
			$data['main_content'] = 'Main_Content/Catalog_SearchBased';

			$data['based'] = 'Women';

			$data['records'] = $this->Catalog_Model->getSpecData('Women');

			$this->session->set_flashdata('dir','Catalog/womenonly');

			$this->load->view('Page/Catalog', $data);
		}

		public function kidOnly(){

			$this->load->model('Catalog_Model');
			$data['title'] = 'Nirwana Online Stage | Kid Only';
			$data['main_content'] = 'Main_Content/Catalog_SearchBased';

			$data['based'] = 'Kids';

			$data['records'] = $this->Catalog_Model->getSpecData('Kids');

			$this->session->set_flashdata('dir','Catalog/kidonly');

			$this->load->view('Page/Catalog', $data);
		}

		public function sportOnly(){
			
			$this->load->model('Catalog_Model');
			$data['title'] = 'Nirwana Online Stage | Sport Only';
			$data['main_content'] = 'Main_Content/Catalog_SearchBased';

			$data['based'] = 'Sport';

			$data['records'] = $this->Catalog_Model->getSpecData('Sport');

			$this->session->set_flashdata('dir','Catalog/sportonly');

			$this->load->view('Page/Catalog', $data);
		}

		public function addToCart($data){

			$this->load->model('Item_Model');
			$this->Item_Model->addToCart($data);

			redirect($this->session->flashdata('dir'));
		}

	}

?>