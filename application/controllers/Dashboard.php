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
        if($this->session->userdata('status') != "login"){
        redirect(base_url());
        }    
    }   
    public function index()
    {
          //load the database  
          
          $this->load->database();  
          //load the model  
            
          //load the method of model  
          $data = array( 
            'isi' => $this->select->select(),
            'jumlah' => $this->select->jumlah()
        );
          
        $this->load->view('dashboard/dashboard',$data);
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
        $data = array( 
            'isi' => $this->select->select2(),
            'isi2' => $this->select->select4()
        );  
        $this->load->view('dashboard/pengumuman', $data);
    }
    public function admin()
    {
        $this->load->model('select');
          
        $data['isi']=$this->select->select3(); 
        $this->load->view('dashboard/admin',$data);
    }
    public function bimbingan()
    {
        $this->load->model('select');
          
        $data['isi']=$this->select->select5(); 
        $this->load->view('dashboard/bimbingan',$data);
    }
    public function kunjungan()
    {
        $this->load->model('select');
          
        $data['isi']=$this->select->select2(); 
        $this->load->view('dashboard/kunjungan',$data);
    }
     public function export_excel()
     {
        $this->load->model('select');
        $data = array( 
            'isi' => $this->select->select(),
            'isi2' => $this->select->select2()
        );  
        $this->load->view('dashboard/laporan',$data);
   }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

