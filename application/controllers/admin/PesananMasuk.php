<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesananMasuk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("PesananMasuk_model");
		if($this->login_model->tidakMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["PesananMasuk"] = $this->PesananMasuk_model->lihat();
		$this->load->view("admin/pesanan_masuk/pesanan_masuk", $data);
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
		$data["PesananMasuk"] = $this->PesananMasuk_model->hari30();
		$this->load->view("admin/pesanan_masuk/pesanan_masuk", $data);
	}

	public function hapus($id_pesanan)
	{
		if (!isset($id_pesanan)) show_404();

		if ($this->stok_model->hapus($id_pesanan)) {
			redirect('admin/stok/');
		}
	}
}
