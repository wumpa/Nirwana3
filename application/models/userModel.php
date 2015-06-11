<?php
	class userModel extends CI_Model{

		public function validate(){
			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',md5($this->input->post('password')));
			$query = $this->db->get('useraccount');

			if ($query->num_rows == 1) {
			#belom
			} else {
			#belom
			}
		}

		public function createUser(){
			$newUser = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'phonenumber' => $this->input->post('phonenumber'),
			'email' => md5($this->input->post('email'))
			);
			
			$insert= $this->db->insert('useraccount', $newUser);
			return $insert;
		}
	}
?>