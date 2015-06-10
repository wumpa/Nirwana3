<?php 

//Load Header
$this->load->view('Template/Header', $title); 

//Load MainContent
$this->load->view($main_content,$records);

//Load Footer
$this->load->view('Template/Footer'); 

?>