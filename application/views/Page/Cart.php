<?php 
	$this->load->view('Template/Header', $title); 

	$this->load->view($main_content,$records);

	$this->load->view('Template/Footer'); 

?>