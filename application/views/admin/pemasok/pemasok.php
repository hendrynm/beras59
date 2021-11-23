<?php
if ($this->session->userdata('bagianAsisten') != "Pemilik") redirect('admin');
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
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Pemasok</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen pemasok barang.</span>

			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar Pemasok
					<!-- Tambah data belum jadi -->
					<a href="<?php // echo site_url('admin/pemasok/tambah/') ?>"
					   class="aksi float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body shadow">
					<div class="table-responsive table-striped">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="table-dark">
							<tr>
								<th>Kode Pemasok</th>
								<th>Nama Pemasok</th>
								<th>Alamat</th>
								<th>Kontak</th>
								<th class="aksi">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($pemasok as $pemasok): ?>
								<tr>
									<td>
										<?php echo $pemasok->id_pemasok?>
									</td>
									<td>
										<?php echo $pemasok->namaPemasok?>
									</td>
									<td>
										<?php echo $pemasok->alamatPemasok?>
									</td>
									<td>
										<?php echo $pemasok->kontakPemasok?>
									</td>
									<!-- Aksi belum jadi -->
									<td class="aksi">
										<a href="<?php // echo site_url('admin/pemasok/ubah/'.$pemasok->id_pemasok) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i>Ubah</a>
										<a onclick="deleteConfirm('<?php
										//echo site_url('admin/pemasok/hapus/'.$pemasok->id_pemasok) ?>')"
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
