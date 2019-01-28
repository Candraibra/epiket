<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("tb_siswa");
		if($query != '')
		{
			$this->db->like('nama', $query);
			$this->db->or_like('kelas', $query);
			$this->db->or_like('darijam', $query);
			$this->db->or_like('ket', $query);
		}
		$this->db->order_by('id', 'ASC');
		return $this->db->get();
	}
	function fetch_data2($query)
	{
		$this->db->select("*");
		$this->db->from("tb_admin");
		if($query != '')
		{
			$this->db->like('id', $query);
			$this->db->or_like('no_induk', $query);
			$this->db->or_like('nama', $query);
			$this->db->or_like('level', $query);
		}
		$this->db->order_by('id', 'ASC');
		return $this->db->get();
	}
}
?>