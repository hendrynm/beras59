<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kedaluwarsa_model extends CI_Model
{
	private $_table = "kedaluwarsa";
	public $kodeBarang, $tanggalStok, $tanggalProduksi, $tanggalKedaluwarsa;

	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($kodeBarang)
	{
		return $this->db->get_where($this->_table, ["kodebarang" => $kodeBarang])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		return $this->db->update($this->_table, $this, array('kodebarang' => $post['kodeBarang']));
	}

	public function hapus($kodeBarang)
	{
		return $this->db->delete($this->_table, array("kodebarang" => $kodeBarang));
	}
}
