<?php
	echo "
	<div id='login'>
		<a href='"; echo base_url(); echo "logout'>"; echo $this->session->userdata('username'); echo"</a>
	</div>
	";
?>