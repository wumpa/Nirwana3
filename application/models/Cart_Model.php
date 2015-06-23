<?php 
	class Cart_Model extends CI_Model{

		public function checkCart(){

			if($this->session->userdata('username')!=NULL){
				$this->db->where('username',$this->session->userdata('username'));
				$this->db->where('status','idle');
				
				$query = $this->db->get('cart');
			} else { }
		}

		public function getData(){

			$this->db->where('useraccount_username',$this->session->userdata('username'));
			$this->db->where('status','idle');
			$query = $this->db->get('transaction');

			$info = '';

			if ($query->num_rows() == 0){
				$info = 'No Item in Cart';

				return null;
			} else {
				$transId = $query->row(0)->id;
				$this->db->where('id_trans',$transId);
				$query = $this->db->get('listitemofransaction');

				return $query->result();

			}
		}
	}
?>