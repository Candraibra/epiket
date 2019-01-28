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
        $no_induk = $this->input->post('no_induk');
        $password = $this->input->post('password');
        $where = array(
            'no_induk' => $no_induk,
            'password' => $password,
        );
        $cek = $this->loginmodel->cek_login("tb_admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'no_induk' => $no_induk,
                'status' => "login",
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("index.php/Dashboard"));

        } else {
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
