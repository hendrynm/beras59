<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan_model extends CI_Model
{
	private $_table = "pemasukan";
	public $id_pemasukan, $namaPemasukan, $tanggalPemasukan, $jumlahPemasukan;


	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_pemasukan)
	{
		return $this->db->get_where($this->_table, ["id_pemasukan" => $id_pemasukan])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		return $this->db->update($this->_table, $this, array('id_pemasukan' => $post['id_pemasukan']));
	}

	public function hari30(){
		$this->db->where('tanggalpemasukan >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpemasukan <=', date('Y-m-d'));
		return $this->db->get($this->_table)->result();
	}

	public function hapus($id_pemasukan)
	{
		return $this->db->delete($this->_table, array("id_pemasukan" => $id_pemasukan));
	}
}
