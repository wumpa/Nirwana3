<?php

	class catalogModel extends CI_Model{

		public function getData(){
			$query = $this->db->get('item');
			return $query->result();
		}	

		public function getSpecData($based){
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('type',$based);

			$query = $this->db->get();
			return $query->result();
		}

	}
	
?>