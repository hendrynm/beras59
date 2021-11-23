<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("asisten_model");
		if ($this->login_model->tidakMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["asisten"] = $this->asisten_model->lihat();
		$this->load->view("admin/asisten/asisten", $data);
	}

	public function tambah()
	{
		$asisten = $this->asisten_model;
		$validation = $this->form_validation;
		$validation->set_rules($asisten->rules());

		if ($validation->run()) {
			$asisten->tambah();
			$this->session->set_flashdata('sukses',
				'Data Berhasil disimpan. Anda akan dialihkan otomatis dalam 5 detik.');
		}

		$this->load->view("admin/asisten/asisten_tambah");
	}

	public function ubah($id_asisten)
	{
		if (!isset($id_asisten)) redirect('admin/asisten/');

		$asisten = $this->asisten_model;
		$validation = $this->form_validation;
		$validation->set_rules($asisten->rules());

		if ($validation->run()) {
			$asisten->ubah();
			$this->session->set_flashdata('sukses',
				'Data Berhasil diperbarui. Anda akan dialihkan otomatis dalam 5 detik.');
		}

		$data["asisten"] = $asisten->getById($id_asisten);
		if (!$data["asisten"]) show_404();

		$this->load->view("admin/asisten/asisten_ubah", $data);
	}

	public function hapus($id_asisten)
	{
		if (!isset($id_asisten)) show_404();

		if ($this->asisten_model->hapus($id_asisten)) {
			redirect('admin/asisten/');
		}
	}
}
