<?php

	class catalog extends CI_Controller{

		public function index(){
			$this->load->model('catalogModel');

			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'template/ListCatalog';

			$data['records'] = $this->catalogModel->getData();

			$this->load->view('catalog', $data);
		}

		public function manOnly(){
			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'template/searchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->catalogModel->getSpecData('Man');

			$this->load->view('catalog', $data);
		}

		public function womenOnly(){
			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'template/searchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->catalogModel->getSpecData('Women');

			$this->load->view('catalog', $data);
		}

		public function kidOnly(){
			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'template/searchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->catalogModel->getSpecData('Kid');

			$this->load->view('catalog', $data);
		}

		public function sportOnly(){
			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'template/searchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->catalogModel->getSpecData('Sport');

			$this->load->view('catalog', $data);
		}

	}

?>