<?php 

class A_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('anggota');
	}

	function tambah_data($data, $table){
		$this->db->insert($table, $data);
	}

	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>