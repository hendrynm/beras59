<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
	public function pesananMasuk()
	{
		$this->db->select('tanggalpesananmasuk');
		$this->db->where('tanggalpesananmasuk >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpesananmasuk <=', date('Y-m-d'));
		return $this->db->count_all_results('pesananmasuk');
	}

	public function pesananKeluar()
	{
		$this->db->select('tanggalpesanankeluar');
		$this->db->where('tanggalpesanankeluar >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpesanankeluar <=', date('Y-m-d'));
		return $this->db->count_all_results('pesanankeluar');
	}

	public function pemasukan()
	{
		$this->db->select_sum('jumlahpemasukan');
		$this->db->where('tanggalpemasukan >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpemasukan <=', date('Y-m-d'));
		return $this->db->get('pemasukan')->row();
	}

	public function pengeluaran()
	{
		$this->db->select_sum('jumlahpengeluaran');
		$this->db->where('tanggalpengeluaran >=', date('Y-m-d', strtotime('-29 days')));
		$this->db->where('tanggalpengeluaran <=', date('Y-m-d'));
		return $this->db->get('pengeluaran')->row();
	}

	public function grafikPesanan()
	{
		$this->db->select_sum('kuantitaspesananmasuk');
		$this->db->select('tanggalpesananmasuk');
		$this->db->group_by('tanggalpesananmasuk');
		return $this->db->get('pesananmasuk')->row();
	}
}
