<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok_model extends CI_Model
{
	private $_table = "pemasok";

	public $id_pemasok, $namaPemasok, $alamatPemasok, $kontakPemasok;

	public function rules()
	{
		// doing nothing
	}

	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($kodeBarang)
	{
		return $this->db->get_where($this->_table, ["kodeBarang" => $kodeBarang])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		return $this->db->update($this->_table, $this, array('kodeBarang' => $post['kodeBarang']));
	}

	public function hapus($kodeBarang)
	{
		return $this->db->delete($this->_table, array("kodeBarang" => $kodeBarang));
	}
}
