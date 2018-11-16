<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

        $this->load->model('model');
        $this->load->model('select');
    }
    public function index()
    {
          //load the database  
          $this->load->database();  
          //load the model  
            
          //load the method of model  
          $data['isi']=$this->select->select();
          $data2['isi2']=$this->select->select2();
        $this->load->view('dashboard/dashboard',$data,$data2);
	}

    public function siswa()
    
    {
        //load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('select');  
        //load the method of model  
        $data['isi']=$this->select->select();  
        $this->load->view('dashboard/siswa' , $data);
    }
    public function guru()
    {
        $this->load->database();  
        //load the model  
        $this->load->model('select');  
        $data['isi']=$this->select->select2();  
        $this->load->view('dashboard/guru', $data);
    }
    public function pengumuman()
    
    {
        $this->load->database();  
        //load the model  
        $this->load->model('select');  
        $data['isi']=$this->select->select2();  
        $this->load->view('dashboard/pengumuman', $data);
    }
    public function admin()
    {
        $this->load->view('dashboard/admin');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Cilin', 'refresh');
    }
}

