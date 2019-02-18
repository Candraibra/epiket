<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('model');
        $this->load->model('select');
        if($this->session->userdata('status') != "login"){
        redirect(base_url());
        }    
    }   
    public function index()
    {
          //load the database  
          
          $this->load->database();  
          //load the model  
          $this->load->model('select');  
          //load the method of model  
          $data['isi']=$this->select->select(); 
          $this->load->view('dashboard/siswa1' , $data);
	}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

