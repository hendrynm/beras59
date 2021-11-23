<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
<div id="wrapper">
	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>

		<div class="container-fluid">
			<div class="d-sm-flex">
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Pesanan Keluar</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen pesanan yang keluar.</span>

			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar Pesanan Keluar
					<!-- Tambah data belum jadi -->
					<a href="<?php //echo site_url('admin/pesanankeluar/tambah/') ?>"
					   class="aksi float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
					<a href="<?php echo site_url('admin/pesanankeluar/hari30/') ?>"
					   class="aksi float-right mr-3" style="text-decoration:none">
						<i class="fas fa-calendar"></i> 30 Hari Terakhir</a>
					<a href="<?php echo site_url('admin/pesanankeluar/') ?>"
					   class="aksi float-right mr-3" style="text-decoration:none">
						<i class="fas fa-database"></i> Semua data</a>
				</div>
				<div class="card-body shadow">
					<div class="table-responsive table-striped">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="table-dark">
							<tr>
								<th>Kode Pesanan</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Tanggal Kirim</th>
								<th>Biaya Kirim</th>
								<th>Berat</th>
								<th>Alamat Kirim</th>
								<th class="aksi">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($pesanankeluar as $pk): ?>
								<tr>
									<td>
										<?php echo $pk->id_pesanan?>
									</td>
									<td>
										<?php echo $pk->kodeBarang?>
									</td>
									<td>
										<?php echo $pk->namaBarang?>
									</td>
									<td>
										<?php echo date_format(date_create($pk->tanggalPesananKeluar),"d-m-Y")?>
									</td>
									<td>
										Rp<?php echo number_format($pk->biayaKirimPesananKeluar,0,",",".")?>
									</td>
									<td>
										<?php echo $pk->beratPesananKeluar?>
									</td>
									<td>
										<?php echo $pk->alamatKirimPesananKeluar?>
									</td>
									<!-- Aksi belum jadi -->
									<td class="aksi">
										<a href="<?php //echo site_url('admin/pesanankeluar/ubah/'.$pk->id_pesanan) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i>Ubah</a>
										<a onclick="deleteConfirm('<?php
										//echo site_url('admin/pesanankeluar/hapus/'.$pk->id_pesanan) ?>')"
										   href="#!" class="btn-small text-danger text-decoration-none">
											<i class="fas fa-trash"></i>Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
</div>
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>

<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>
