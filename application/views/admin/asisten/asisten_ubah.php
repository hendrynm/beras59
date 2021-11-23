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
			<?php if ($this->session->flashdata('sukses')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('sukses'); ?>
				</div>
				<?php header("refresh:5, url=".site_url('admin/asisten'));endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo base_url('admin/asisten/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
				</div>
				<div class="card-body shadow">
					<form action="" class="" method="post">
						<input type="hidden" name="kodeBarang" value="<?php echo $asisten->id_asisten ?>">
						<div class="form-group row">
							<label for="kodeAsisten" class="text-dark text-left col-md-2">Kode Asisten</label>
							<input class="form-control col-md-2" type="text"
								   name="kodeAsisten" value="<?php echo $asisten->id_asisten ?>" disabled="disabled">
						</div>
						<div class="form-group row">
							<label for="namaAsisten" class="text-dark text-left col-md-2">Nama</label>
							<input class="form-control col-md-8" type="text"
								   name="namaAsisten" value="<?php echo $asisten->namaAsisten ?>">
						</div>
						<div class="form-group row">
							<label for="alamatAsisten" class="text-dark text-left col-md-2">Alamt</label>
							<input class="form-control col-md-2" type="text"
								   name="alamatAsisten" value="<?php echo $asisten->alamatAsisten ?>">
						</div>
						<div class="form-group row">
							<label for="kontakAsisten" class="text-dark text-left col-md-2">Kontak</label>
							<input class="form-control col-md-2" type="text"
								   name="kontakAsisten" value="<?php echo $asisten->kontakAsisten ?>">
						</div>
						<div class="form-group row">
							<label for="bagianAsisten" class="text-dark text-left col-md-2">Bagian Asisten</label>
							<select class="form-control col-md-2" type="text" name="bagianAsisten">
								<option name="bagianAsisten" value="" selected disabled></option>
								<option name="bagianAsisten" value="Pelayanan">Pelayanan</option>
								<option name="bagianAsisten" value="Operasional">Operasional</option>
								<option name="bagianAsisten" value="Keuangan">Keuangan</option>
							</select>
						</div>
						<div class="form-group row">
							<div class="col-md-1">
								<a class="btn btn-danger" type="button"
								   href="<?php echo base_url('admin/asisten') ?>">Batal</a>
							</div>
							<div class="col-md-1">
								<input class="btn btn-primary btn-block" type="submit" name="simpan" value="Ubah">
							</div>
						</div>
					</form>
				</div>

				<div class="card-footer text-danger">
					Semua kolom harus diisi agar bisa berjalan dengan baik.
				</div>
			</div>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>
</html>
