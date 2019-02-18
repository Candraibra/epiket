<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('loginmodel');

    }

    // List all your items
    public function index()
    {
        $this->load->view('login');
    }
    
    public function aksi_login()
    {
        $no_induk=htmlspecialchars($this->input->post('no_induk',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek=$this->loginmodel->auth($no_induk,$password);
 
        if($cek->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('status',"login");
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('Dashboard');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','0');
                    $this->session->set_userdata('status',"login");
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('Siswa');
                 }
 
        }else {
            $message = "nomer Id anda atau passwordnya salah";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('Login', 'refresh');
        }
 
    }

        
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
