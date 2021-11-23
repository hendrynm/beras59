<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	private $_table = "asisten";

	public function masuk(){
		$post = $this->input->post();

		$this->db->where('namapengguna', $post["namaPengguna"]);
		$pengguna = $this->db->get($this->_table)->row();

		if($pengguna){
			password_verify($post["sandiPengguna"], $pengguna->sandipengguna);
			$this->session->set_userdata(['namaAsisten' => $pengguna->namaasisten]);
			$this->session->set_userdata(['bagianAsisten' => $pengguna->bagianasisten]);
			$this->session->set_userdata(['user_logged' => $pengguna]);
			return true;
		} else{
			$this->session->set_flashdata('gagal',
				'Nama atau sandi yang Anda masukkan salah!');
			return false;
		}
	}

	public function tidakMasuk(){
		return $this->session->userdata('user_logged') === null;
	}
}
