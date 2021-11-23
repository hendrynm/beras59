<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pemasok_model");
		if($this->login_model->tidakMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["pemasok"] = $this->pemasok_model->lihat();
		$this->load->view("admin/pemasok/pemasok", $data);
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

	public function ubah($kodeBarang)
	{
		if (!isset($kodeBarang)) redirect('admin/stok/');

		$stok = $this->stok_model;
		$validation = $this->form_validation;
		$validation->set_rules($stok->rules());

		if ($validation->run()) {
			$stok->ubah();
			$this->session->set_flashdata('sukses',
				'Data Berhasil diperbarui. Anda akan dialihkan otomatis dalam 5 detik.');
		}

		$data["stok"] = $stok->getById($kodeBarang);
		if (!$data["stok"]) show_404('my404');

		$this->load->view("admin/stok/stok_ubah", $data);
	}

	public function kirim($kodeBarang){

	}

	public function hapus($kodeBarang)
	{
		if (!isset($kodeBarang)) show_404();

		if ($this->stok_model->hapus($kodeBarang)) {
			redirect('admin/stok/');
		}
	}
}
