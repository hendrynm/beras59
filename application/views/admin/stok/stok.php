<?php
if ($this->session->userdata('bagianAsisten') == "Keuangan") redirect('admin');
?>
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
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Stok</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen stok barang yang ada.</span>

			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar Stok
					<a href="<?php echo site_url('admin/stok/tambah/') ?>"
					   class="aksiStok float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body shadow">
					<div class="table-responsive table-striped">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="table-dark">
							<tr>
								<th>Kode</th>
								<th>Nama</th>
								<th>Berat</th>
								<th>Harga Beli</th>
								<th>Harga Jual</th>
								<th>Pajak</th>
								<th>Diskon</th>
								<th>Sisa Stok</th>
								<th>Kode Pemasok</th>
								<th class="aksiStok">Aksi</th>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($stok as $stok): ?>
								<tr>
									<td>
										<?php echo $stok->kodeBarang?>
									</td>
									<td>
										<?php echo $stok->namaBarang?>
									</td>
									<td>
										<?php echo $stok->beratBarang?> kg
									</td>
									<td>
										Rp<?php echo number_format($stok->hargaBeli,0,",",".")?>
									</td>
									<td>
										Rp<?php echo number_format($stok->hargaJual,0,",",".")?>
									</td>
									<td>
										Rp<?php echo number_format($stok->pajakBarang,0,",",".")?>
									</td>
									<td>
										Rp<?php echo number_format($stok->diskonBarang,0,",",".")?>
									</td>
									<td>
										<?php echo $stok->sisaBarang?>
									</td>
									<td>
										<?php echo $stok->id_pemasok?>
									</td>
									<td class="aksiStok">
										<a href="<?php echo
										site_url('admin/stok/ubah/'.$stok->kodeBarang) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i> Ubah</a>
										<a onclick="deleteConfirm('<?php echo
										site_url('admin/stok/hapus/'.$stok->kodeBarang) ?>')"
										   href="#!" class="btn-small text-danger text-decoration-none">
											<i class="fas fa-trash"></i> Hapus</a>
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
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>

<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>

</html>
