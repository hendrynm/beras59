<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesananKeluar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("PesananKeluar_model");
		if($this->login_model->tidakMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["PesananKeluar"] = $this->PesananKeluar_model->lihat();
		$this->load->view("admin/pesanan_keluar/pesanan_keluar", $data);
	}

	public function tambah()
	{
		$stok = $this->stok_model;
		$validation = $this->form_validation;
		$validation->set_rules($stok->rules());

		if ($validation->run()) {
			$stok->tambah();
			$this->session->set_flashdata('sukses',
				'Data Berhasil disimpan. Anda akan dialihkan otomatis dalam 5 detik.');
		}

		$this->load->view("admin/stok/stok_tambah");
	}

	public function ubah($id_pesanan)
	{
		if (!isset($id_pesanan)) redirect('admin/stok/');

		$stok = $this->stok_model;
		$validation = $this->form_validation;
		$validation->set_rules($stok->rules());

		if ($validation->run()) {
			$stok->ubah();
			$this->session->set_flashdata('sukses',
				'Data Berhasil diperbarui. Anda akan dialihkan otomatis dalam 5 detik.');
		}

		$data["stok"] = $stok->getById($id_pesanan);
		if (!$data["stok"]) show_404('my404');

		$this->load->view("admin/stok/stok_ubah", $data);
	}

	public function kirim($id_pesanan){

	}

	public function hari30(){
		$data["PesananKeluar"] = $this->PesananKeluar_model->hari30();
		$this->load->view("admin/pesanan_keluar/pesanan_keluar", $data);
	}

	public function hapus($id_pesanan)
	{
		if (!isset($id_pesanan)) show_404();

		if ($this->stok_model->hapus($id_pesanan)) {
			redirect('admin/stok/');
		}
	}
}
