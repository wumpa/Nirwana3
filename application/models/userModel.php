<?php
	class userModel extends CI_Model{

		public function validate(){
			$this->db->from('useraccount');
			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',$this->input->post('password'));
			$query = $this->db->get();

			#if($query1 = $this->get_records())
			#{
			#	$data['records'] = $query1;
			#}
			if ($query->num_rows() == 1) {

				$result = array();
				$result = $this->db->get('useraccount')->row_array();
				$result['username'] = $result['username'];
				$data['username'] = $result['username'];
				// $query->result()->username;
				$this->session->set_userdata($data);
				//$this->load->view('Home', $data);
				echo "Logged in";
				// $this->load->view('mahasiswa_home', $data);
				// $this->load->view('thread/index', $data);
				// redirect('site/mahasiswa');
			}
			else{
				$this->session->set_flashdata('Error','Wrong email, password combination');
	           // redirect('login','refresh');
	            echo "False";
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