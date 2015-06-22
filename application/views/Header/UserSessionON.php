<?php
	$this->db->where('useraccount_username',$this->session->userdata('username'));
	$this->db->where('status','idle');
	$query = $this->db->get('transaction');

	$info = '';

	if ($query->num_rows() == 0){
		$info = 'No Item in Cart';
	} else {
		$transId = $query->row(0)->id;
		$this->db->where('id_trans',$transId);
		$query = $this->db->get('listitemofransaction');

		$count = $query->num_rows();

		if ($query->num_rows() == 0){
			$info = 'No Item in Cart';
		} else {
			$info = $count.' - Item(s) in Cart';
		}

	}

	echo "
	<div id='cart'>
		<ul id='cart-nav'>
			<li><a href='"; echo base_url(); echo "'>"; echo $info; echo"</a>
					<ul>
						<li><a>View</a></li>
						<li><a href='"; echo base_url(); echo "cart/clearcart'>Clear</a></li>
					</ul>
			</li>
		</ul>
	</div>
	<div id='separator2'>
		<a></a>
	</div>
	<div id='profile'>
		<ul id='prof-nav'>
			<li><a href='"; echo base_url(); echo "'>"; echo $this->session->userdata('username'); echo"</a>
				<ul>
					<li><a>Profile</a></li>
					<li><a href='"; echo base_url(); echo "logout'>Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>


	";
?>