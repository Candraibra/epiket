<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cilin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('model');
    }
    public function index()
    {
        $this->load->view('index');
    }
    public function add()
    {
        $this->load->view('tambah'); //memanggil form untuk input data yg berada di folder user
    }
    public function masukkan()
    {
        # code...
        $input = array('fullname' => $this->input->post('fullname'), 'kelas' => $this->input->post('kelas'), 'email' => $this->input->post('email'), 'keluhan' => $this->input->post('keluhan'));
        $this->model->input($input);
        redirect(base_url());
    }
    public function addsiswa()
    {
        # code...
        $input = array('nama' => $this->input->post('nama'), 'kelas' => $this->input->post('kelas'), 'tgl' => $this->input->post('tgl'), 'darijam' => $this->input->post('darijam'), 'ket' => $this->input->post('ket'));
        $this->model->inputsiswa($input);
        redirect( 'Dashboard/siswa','refresh');
    }
    //Update one item
    public function updatesiswa($id = '')
    {
        # code...
        $this->db->where('id', $id);
        $this->model->updatesiswa($id);
    }
    //Delete one item
    public function deletesiswa($id = '')
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_siswa');
        redirect( 'Dashboard/siswa','refresh');
    }
    public function prosesupdate($id = "")
    {
        $input = array('nama' => $this->input->post('nama'), 'kelas' => $this->input->post('kelas'), 'tgl' => $this->input->post('tgl'), 'darijam' => $this->input->post('darijam'), 'ket' => $this->input->post('ket'));
        $this->model->prosesupdate($input, $id);
        redirect( 'Dashboard/siswa','refresh');
    }
}
