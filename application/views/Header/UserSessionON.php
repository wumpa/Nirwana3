<?php
	$this->db->where('useraccount_username',$this->session->userdata('username'));
	$this->db->where('status','idle');
	$query = $this->db->get('transaction');

	$info = '';

	if ($query->num_rows() == 0){
		$info = 'No Item in Cart';
	} else {
		$info = 'Item(s) in Cart';
	}

	echo "
	<div id='login'>
		<a href='"; echo base_url(); echo "logout'>"; echo $this->session->userdata('username').' - '.$info; echo"</a>
	</div>
	";
?>