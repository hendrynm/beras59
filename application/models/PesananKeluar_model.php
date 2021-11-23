<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesananKeluar_model extends CI_Model
{
	private $_table = "pesanankeluar";
	public $id_pesanan, $kodeBatang, $namaBarang, $tanggalPesananKeluar, $biayaKirimPesananKeluar,
		$beratPesananKeluar, $alamatKirimPesananKeluar;

	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_pesanan)
	{
		return $this->db->get_where($this->_table, ["id_pesanan" => $id_pesanan])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		return $this->db->update($this->_table, $this, array('id_pesanan' => $post['id_pesanan']));
	}

	public function hari30(){
		$this->db->where('tanggalPesananKeluar >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalPesananKeluar <=', date('Y-m-d'));
		return $this->db->get($this->_table)->result();
	}

	public function hapus($id_pesanan)
	{
		return $this->db->delete($this->_table, array("id_pesanan" => $id_pesanan));
	}
}
