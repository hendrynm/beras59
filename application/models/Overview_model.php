<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
	public function pesananMasuk()
	{
		$this->db->select('tanggalPesananMasuk');
		$this->db->where('tanggalPesananMasuk >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalPesananMasuk <=', date('Y-m-d'));
		return $this->db->count_all_results('pesananMasuk');
	}

	public function pesananKeluar()
	{
		$this->db->select('tanggalPesananKeluar');
		$this->db->where('tanggalPesananKeluar >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalPesananKeluar <=', date('Y-m-d'));
		return $this->db->count_all_results('pesananKeluar');
	}

	public function pemasukan()
	{
		$this->db->select_sum('jumlahPemasukan');
		$this->db->where('tanggalPemasukan >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalPemasukan <=', date('Y-m-d'));
		return $this->db->get('pemasukan')->row();
	}

	public function pengeluaran()
	{
		$this->db->select_sum('jumlahPengeluaran');
		$this->db->where('tanggalPengeluaran >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalPengeluaran <=', date('Y-m-d'));
		return $this->db->get('pengeluaran')->row();
	}

	public function grafikPesanan()
	{
		$this->db->select_sum('kuantitasPesananMasuk');
		$this->db->select('tanggalPesananMasuk');
		$this->db->group_by('tanggalPesananMasuk');
		return $this->db->get('pesananMasuk')->row();
	}
}
