<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten_model extends CI_Model
{
	private $_table = "asisten";
	public $id_asisten, $namaAsisten, $alamatAsisten, $kontakAsisten, $bagianAsisten;

	public function rules(){

	}

	public function lihat()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_asisten)
	{
		return $this->db->get_where($this->_table, ["id_asisten" => $id_asisten])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		$this->id_asisten = strtoupper($post["id_asisten"]);
		$this->namaAsisten = $post["namaAsisten"];
		$this->alamatAsisten = $post["alamatAsisten"];
		$this->kontakAsisten = $post["kontakAsisten"];
		$this->bagianAsisten = $post["bagianAsisten"];
		$this->namaPengguna = $post["namaPengguna"];
		$this->sandiPengguna = password_hash($post["sandiPengguna"],PASSWORD_DEFAULT);
		return $this->db->insert($this->_table, $this);
	}

	public function ubah()
	{
		$post = $this->input->post();
		$this->id_asisten = strtoupper($post["id_asisten"]);
		$this->namaAsisten = $post["namaAsisten"];
		$this->alamatAsisten = $post["alamatAsisten"];
		$this->kontakAsisten = $post["kontakAsisten"];
		$this->bagianAsisten = $post["bagianAsisten"];
		$this->namaPengguna = $post["namaPengguna"];
		$this->sandiPengguna = password_hash($post["sandiPengguna"],PASSWORD_DEFAULT);
		return $this->db->update($this->_table, $this, array('id_asisten' => $post['id_asisten']));
	}

	public function hapus($id_asisten)
	{
		return $this->db->delete($this->_table, array("id_asisten" => $id_asisten));
	}
}
