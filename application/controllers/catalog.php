<?php

	class catalog extends CI_Controller{

		public function index(){

			$this->load->model('catalogModel');

			$data['title'] = 'Nirwana Online Stage | Catalog';
			$data['main_content'] = 'Page/ListCatalog';
			$data['type'] = 'All Product';

			$data['records'] = $this->catalogModel->getData();

			$this->load->view('Template/Base', $data);
		}

		public function manOnly(){

			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Man Only';
			$data['main_content'] = 'Page/SearchBased';

			$data['based'] = 'Man';

			$data['records'] = $this->catalogModel->getSpecData('Man');

			$this->load->view('Template/Base', $data);
		}

		public function womenOnly(){

			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Women Only';
			$data['main_content'] = 'Page/SearchBased';

			$data['based'] = 'Women';

			$data['records'] = $this->catalogModel->getSpecData('Women');

			$this->load->view('Template/Base', $data);
		}

		public function kidOnly(){

			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Kid Only';
			$data['main_content'] = 'Page/SearchBased';

			$data['based'] = 'Kids';

			$data['records'] = $this->catalogModel->getSpecData('Kids');

			$this->load->view('Template/Base', $data);
		}

		public function sportOnly(){
			$this->load->model('catalogModel');
			$data['title'] = 'Nirwana Online Stage | Sport Only';
			$data['main_content'] = 'Page/SearchBased';

			$data['based'] = 'Sport';

			$data['records'] = $this->catalogModel->getSpecData('Sport');

			$this->load->view('Template/Base', $data);
		}

	}

?>