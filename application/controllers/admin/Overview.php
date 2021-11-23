<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		if($this->login_model->tidakMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		// 30 hari
		$data['pesananMasuk'] = $this->overview_model->pesananMasuk();
		$data['pesananKeluar'] = $this->overview_model->pesananKeluar();
		$data['pemasukan'] = $this->overview_model->pemasukan();
		$data['pengeluaran'] = $this->overview_model->pengeluaran();

		// view
		$this->load->view('admin/overview',$data);
	}
}
