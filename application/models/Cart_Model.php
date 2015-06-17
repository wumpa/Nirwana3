<?php 
	class Cart_Model extends CI_Model(){

		public function checkCart(){

			if($this->session->userdata('username')!=NULL){
				$this->db->where('username',$this->session->userdata('username'));
				$this->db->where('status','idle');
				
				$query = $this->db->get('cart');
			} else { }
		}
	}
?>