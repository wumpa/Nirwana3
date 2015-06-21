<?php
	
	class cart extends CI_Controller{

		public function index(){

		}

		public function clearcart(){

			$this->db->where('useraccount_username',$this->session->userdata('username'));
			$this->db->where('status','idle');
			$query = $this->db->get('transaction');

			$transId = $query->row(0)->id;

			$this->db->where('id_trans',$transId);
			$this->db->delete('listitemofransaction');

			redirect('home');
		}

		public function viewcart(){
			$data['total'] = '';
		}

	}
?>