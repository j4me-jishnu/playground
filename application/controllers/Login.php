<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
  }

	public function index(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
    if($this->form_validation->run()==FALSE){
      $this->load->view('Login/index');
    }
    else{
      $data=array('uesrnmae')
    }
	}
}
