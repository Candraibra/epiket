<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {


	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
		<div class="card-body table-responsive">
		<table class="table table-hover">
		  <thead class="text-warning">
			<th>NO</th>
			<th>Nama</th>
			<th>Kelas</th>	
			<th>Tanggal</th>
			<th>Dari Jam</th>
			<th>Ket</th>
			<th>Opsi</th>
		  </thead>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->nama.'</td>
							<td>'.$row->kelas.'</td>
							<td>'.$row->tgl.'</td>
							<td>'.$row->darijam.'</td>
							<td>'.$row->ket.'</td>
							<td> 
								<a class="btn btn-danger btn-sm" href="http://localhost/ekonsel/index.php/Cilin/deletesiswa/<?php echo $row->id ?>">Hapus							
							</td>
							<td>
								<a class="btn btn-warning btn-sm" href="http://localhost/ekonsel/index.php/Cilin/updatesiswa/<?php echo $row->id ?>">Ubah
							</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">Yah kayaknya gaada deh</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
	function fetch3()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
		<div class="card-body table-responsive">
		<table class="table table-hover">
		  <thead class="text-warning">
			<th>NO</th>
			<th>Nama</th>
			<th>Kelas</th>	
			<th>Tanggal</th>
			<th>Dari Jam</th>
			<th>Ket</th>
		
		  </thead>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->nama.'</td>
							<td>'.$row->kelas.'</td>
							<td>'.$row->tgl.'</td>
							<td>'.$row->darijam.'</td>
							<td>'.$row->ket.'</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">Yah kayaknya gaada deh</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	function fetch2()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data2($query);
		$output .= '
		<div class="card-body table-responsive">
		<table class="table table-hover">
		  <thead class="text-warning">
			<th>NO</th>
			<th>NO Induk</th>
			<th>Nama</th>
			<th>Level</th>
		  </thead>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->no_induk.'</td>
							<td>'.$row->nama.'</td>
							<td>'.$row->level.'</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">Yah kayaknya gaada deh</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
	
}
