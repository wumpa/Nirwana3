<?php
	
	class cart extends CI_Controller{

		public function index(){
			$this->viewcart();
		}

		public function clearcart(){

			$this->load->model('Cart_Model');

			if ($this->Cart_Model->checkCart() == 'true'){
				$this->db->where('useraccount_username',$this->session->userdata('username'));
				$this->db->where('status','idle');
				$query = $this->db->get('transaction');

				$transId = $query->row(0)->id;

				$this->db->where('id_trans',$transId);
				$this->db->delete('listitemofransaction');
			} else {}

			redirect('home');
		}

		public function viewcart(){

			$this->load->model('Cart_Model');

			if ($this->Cart_Model->checkCart() == 'true'){
				$data['title'] = 'Nirwana Online Stage | Cart';
				$data['main_content'] = 'Main_Content/Cart_List';

				

				$data['records'] = $this->Cart_Model->getData();

				$this->load->view('Page/Cart', $data);
			} else { redirect('home'); }
		}

		

	}
?>