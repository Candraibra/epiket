<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class Model extends CI_Model
{

    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->database();

    }
    public function input($input)
    {
        $insert = $this->db->insert('tb_keluhan', $input); //
    }
    public function inputsiswa($input)
    {
        $insert = $this->db->insert('tb_siswa', $input); //
    }
    public function updatesiswa($input)
    {
        $data['isi'] = $this->db->get('tb_siswa');
        $this->load->view('dashboard/siswa', $data);
    }
    public function prosesupdate($input,$id)
    {
       $this->db->where("id",$id);
       $insert =$this->db->update("tb_siswa",$input);
    }
    
}

