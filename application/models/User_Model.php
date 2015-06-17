<?php
	class User_Model extends CI_Model{

		public function validate(){

			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',$this->input->post('password'));
			$query = $this->db->get('useraccount');

			$var['flag'] = 'false';

			foreach ($query->result() as $rec) {

				if ($rec->username == $this->input->post('username')) {
					$var['flag'] = 'true';

					$result['username'] = $rec->username;
					$userdata['username'] = $rec->username;

					$this->session->set_userdata($userdata);
				}
			}

			if ($var['flag'] == 'true'){
				redirect('home');
			} else {
				redirect('login','refresh');
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