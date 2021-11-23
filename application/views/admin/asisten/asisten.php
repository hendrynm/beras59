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
			<!-- Info Halaman -->
			<div class="d-sm-flex">
				<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Halaman Asisten</h1>
			</div>
			<span class="text-gray-700">Halaman ini digunakan untuk memanajemen asisten.</span>

			<!-- Tabel -->
			<div class="card mb-3 mt-4 mr-auto">
				<div class="card-header text-dark font-weight-bold">Daftar Asisten
					<a href="<?php echo site_url('admin/asisten/tambah/') ?>"
					   class="aksiAsisten float-right" style="text-decoration:none">
						<i class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body shadow">
					<div class="table-responsive table-striped">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="table-dark">
							<tr>
								<th>Kode Asisten</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Kontak</th>
								<th>Bagian</th>
								<th class="aksiAsisten">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($asisten as $asisten): ?>
								<tr>
									<td>
										<?php echo $asisten->id_asisten?>
									</td>
									<td>
										<?php echo $asisten->namaasisten?>
									</td>
									<td>
										<?php echo $asisten->alamatasisten?>
									</td>
									<td>
										<?php echo $asisten->kontakasisten?>
									</td>
									<td>
										<?php echo $asisten->bagianasisten?>
									</td>
									<td class="aksiAsisten">
										<a href="<?php echo
										site_url('admin/asisten/ubah/'.$asisten->id_asisten) ?>"
										   class="btn-small text-primary text-decoration-none">
											<i class="fas fa-edit"></i>Ubah</a>
										<a onclick="deleteConfirm('<?php echo
										site_url('admin/asisten/hapus/'.$asisten->id_asisten) ?>')"
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
