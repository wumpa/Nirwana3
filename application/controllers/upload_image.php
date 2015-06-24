<?php

class Mainupload extends CI_Controller{
  
  public function index(){
  
    $this->load->view('main_view ,array('error'=>''));
    
    }
    
    public function upload(){
    $config['upload_path'] = "./item/";
    $config['allowed_type'] = 'jpg|jpeg|png';
    $this->load->library('upload',$config);
    if(!$this->upload->do_upload()){
    $error = array('error'=>$this->upload->display_errors());
    $this->load->view('main_view',$error);
    
    }
  }
}
