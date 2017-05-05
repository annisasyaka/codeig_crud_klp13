<?php

/**
* 
*/
class Crud extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('a_data');
		$this->load->helper('url');
	}

	function index(){
		$data['anggota'] = $this->a_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}

	function tambah(){
		$this->load->view('v_tambah');
	}

	function tambah_proses(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$hobi = $this->input->post('hobi');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'alamat' => $alamat,
			'umur' => $umur,
			'hobi' => $hobi
			);
		$this->a_data->tambah_data($data,'anggota');
		redirect('crud');
	}

	function hapus($id){
		$where = array('id'=>$id);
		$this->a_data->hapus_data($where, 'anggota');
		redirect('crud');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['anggota']= $this->a_data->edit_data($where, 'anggota')->result();
		$this->load->view('v_edit', $data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$hobi = $this->input->post('hobi');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'umur' => $umur,
			'hobi' => $hobi
			);
		$where = array('id'=> $id);
		$this->a_data->update_data($where,$data,'anggota');
		redirect('crud');
	}
}

  ?>