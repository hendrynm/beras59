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
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Kedaluwarsa</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen tanggal stok.</span>

			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar kedaluwarsa
					<!-- Tambah data belum jadi -->
					<a href="<?php // echo site_url('admin/kedaluwarsa/tambah/') ?>"
					   class="aksiKedaluwarsa float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body shadow">
					<div class="table-responsive table-striped">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="table-dark">
							<tr>
								<th>Kode Barang</th>
								<th>Tanggal Stok</th>
								<th>Tanggal Produksi</th>
								<th>Tanggal Kedaluwarsa</th>
								<th class="aksiKedaluwarsa">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($kedaluwarsa as $kedaluwarsa): ?>
								<tr>
									<td>
										<?php echo $kedaluwarsa->kodebarang?>
									</td>
									<td>
										<?php echo date_format(date_create($kedaluwarsa->tanggalstok),"d-m-Y")?>
									</td>
									<td>
										<?php echo date_format(date_create($kedaluwarsa->tanggalproduksi),"d-m-Y")?>
									</td>
									<td>
										<?php echo date_format(date_create($kedaluwarsa->tanggalkedaluwarsa),"d-m-Y")?>
									</td>
									<!-- Aksi belum jadi -->
									<td class="aksiKedaluwarsa">
										<a href="<?php // echo site_url('admin/kedaluwarsa/ubah/'.$kedaluwarsa->kodeBarang) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i>Ubah</a>
										<a onclick="deleteConfirm('<?php
										// echo site_url('admin/kedaluwarsa/hapus/'.$kedaluwarsa->kodeBarang) ?>')"
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
