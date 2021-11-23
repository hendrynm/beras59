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
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Pesanan Masuk</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen pesanan yang masuk.</span>

			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar Pesanan Masuk
					<!-- Tambah data belum jadi -->
					<a href="<?php //echo site_url('admin/pesananmasuk/tambah/') ?>"
					   class="aksiPesananMasuk float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
					<a href="<?php echo site_url('admin/pesananmasuk/hari30/') ?>"
					   class="aksi float-right mr-3" style="text-decoration:none">
						<i class="fas fa-calendar"></i> 30 Hari Terakhir</a>
					<a href="<?php echo site_url('admin/pesananmasuk/') ?>"
					   class="aksiPesananMasuk float-right mr-3" style="text-decoration:none">
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
								<th>Tanggal Masuk</th>
								<th>Harga Jual</th>
								<th>Kuantitas</th>
								<th>Harga Total</th>
								<th class="aksiPesananMasuk">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($pesananmasuk as $pm): ?>
								<tr>
									<td>
										<?php echo $pm->id_pesanan?>
									</td>
									<td>
										<?php echo $pm->kodebarang?>
									</td>
									<td>
										<?php echo $pm->namabarang?>
									</td>
									<td>
										<?php echo date_format(date_create($pm->tanggalpesananmasuk),"d-m-Y")?>
									</td>
									<td>
										Rp<?php echo number_format($pm->hargajualpesananmasuk,0,",",".")?>
									</td>
									<td>
										<?php echo $pm->kuantitaspesananmasuk?>
									</td>
									<td>
										Rp<?php echo number_format($pm->hargatotalpesananmasuk,0,",",".")?>
									</td>
									<!-- Aksi belum jadi -->
									<td class="aksiPesananMasuk">
										<a href="<?php //echo site_url('admin/pesananmasuk/ubah/'.$pm->id_pesanan) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i>Ubah</a>
										<a href="<?php //echo site_url('admin/pesananmasuk/kirim'.$pm->id_pesanan) ?>"
										   class="btn-small text-success text-decoration-none">
											<i class="fas fa-truck-loading"></i>Kirim</a>
										<a onclick="deleteConfirm('<?php
										//echo site_url('admin/pesananmasuk/hapus/'.$pm->id_pesanan) ?>')"
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
