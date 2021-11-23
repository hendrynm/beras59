<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_model extends CI_Model
{
	private $_table = "stok";
	public $namaBarang, $kodeBarang, $beratBarang, $id_pemasok, $hargaBeli, $hargaJual, $pajakBarang,
	$diskonBarang, $sisaBarang;

	public function rules()
	{
		return [
			['field' => 'kodeBarang',
				'label' => 'Kode Barang',
				'rules' => 'required']
		];
	}

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
		$this->kodebarang = strtoupper($post["kodeBarang"]);
		$this->namabarang = $post["namaBarang"];
		$this->beratbarang = $post["beratBarang"];
		$this->id_pemasok = $post["id_pemasok"];
		$this->hargabeli = $post["hargaBeli"];
		$this->hargajual = $post["hargaJual"];
		$this->pajakbarang = ($post["hargaJual"])*0.1;
		$this->diskonbarang = $post["diskonBarang"];
		$this->sisabarang = $post["sisaBarang"];
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		$this->kodebarang = $post["kodeBarang"];
		$this->namabarang = $post["namaBarang"];
		$this->beratbarang = $post["beratBarang"];
		$this->id_pemasok = $post["id_pemasok"];
		$this->hargabeli = $post["hargaBeli"];
		$this->hargajual = $post["hargaJual"];
		$this->pajakbarang = ($post["hargaJual"])*0.1;
		$this->diskonbarang = $post["diskonBarang"];
		$this->sisabarang = $post["sisaBarang"];
		return $this->db->update($this->_table, $this, array('kodebarang' => $post['kodeBarang']));
	}

	public function hapus($kodeBarang)
	{
		return $this->db->delete($this->_table, array("kodebarang" => $kodeBarang));
	}
}
