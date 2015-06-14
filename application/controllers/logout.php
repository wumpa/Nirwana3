<?php

class logout extends CI_Controller {

    function index()
    {
    	
		// $this->session->sess_destroy();
		if(isset($_SESSION)){
			$this->session->unset_userdata('username');
		}
		else{
		}
		redirect('','refresh');
    }
}