<?php

	class Item_Model extends CI_Model{
		
		public function addToCart($data){

			if ($this->session->userdata('username') == NULL){
				redirect(base_url().'login');
				echo 'gak login';
			} else {

				$cartId = '';

				$this->checkOrCreateCart($data,$cartId);

				$tableinfo = array(
					'id_trans' => $cartId,
					'id_item' => $data
				);

				$this->db->insert('listitemofransaction',$tableinfo);
				echo "1";
			}
		}

		public function checkOrCreateCart($data,&$cartId){

			$this->db->where('useraccount_username',$this->session->userdata('username'));
			$this->db->where('status','idle');
			$query = $this->db->get('transaction');

			if ($query->result() == NULL){

				$tableinfo2 = array(
					'useraccount_username' => $this->session->userdata('username'),
					'status' => 'idle'
				);

				$this->db->insert('transaction',$tableinfo2);
			} 

			$this->db->where('useraccount_username',$this->session->userdata('username'));
			$this->db->where('status','idle');
			$query = $this->db->get('transaction');

			$find['record'] = $query->result();

			foreach ($find['record'] as $rec) $cartId = $rec->id;

		}
	}

?>