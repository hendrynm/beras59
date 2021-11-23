<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model
{
	private $_table = "pengeluaran";
	public $id_pengeluaran, $namapengeluaran, $tanggalpengeluaran, $jumlahpengeluaran;

	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_pengeluaran)
	{
		return $this->db->get_where($this->_table, ["id_pengeluaran" => $id_pengeluaran])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		return $this->db->update($this->_table, $this, array('id_pengeluaran' => $post['id_pengeluaran']));
	}

	public function hari30(){
		$this->db->where('tanggalpengeluaran >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpengeluaran <=', date('Y-m-d'));
		return $this->db->get($this->_table)->result();
	}

	public function hapus($id_pengeluaran)
	{
		return $this->db->delete($this->_table, array("id_pengeluaran" => $id_pengeluaran));
	}
}
