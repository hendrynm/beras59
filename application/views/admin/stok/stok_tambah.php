<?php
if ($this->session->userdata('bagianAsisten') == "Pelayanan") redirect('admin');
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
			<?php header("refresh:5, url=".site_url('admin/stok'));endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo base_url('admin/stok/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
				</div>
				<div class="card-body shadow">
					<form action="<?php echo site_url('admin/stok/tambah') ?>" class="" method="post">
						<div class="form-group row">
							<label for="kodeBarang" class="text-dark text-left col-md-2">Kode Barang</label>
							<input class="form-control col-md-2" type="text"
								   name="kodeBarang" placeholder="Masukkan kode barang">
						</div>
						<div class="form-group row">
							<label for="namaBarang" class="text-dark text-left col-md-2">Nama Barang</label>
							<input class="form-control col-md-8" type="text"
								   name="namaBarang" placeholder="Masukkan nama barang">
						</div>
						<div class="form-group row">
							<label for="beratBarang" class="text-dark text-left col-md-2">Berat (kg)</label>
							<input class="form-control col-md-1" type="number" min="0"
								   name="beratBarang" placeholder="(kg)">
						</div>
						<div class="form-group row">
							<label for="hargaBeli" class="text-dark text-left col-md-2">Harga Beli (Rp)</label>
							<input class="form-control col-md-2" type="text"
								   name="hargaBeli" placeholder="Masukkan harga beli">
						</div>
						<div class="form-group row">
							<label for="hargaJual" class="text-dark text-left col-md-2">Harga Jual (Rp)</label>
							<input class="form-control col-md-2" type="text"
								   name="hargaJual" placeholder="Masukkan harga jual">
						</div>
						<div class="form-group row">
							<label for="diskonBarang" class="text-dark text-left col-md-2">Diskon (Rp)</label>
							<input class="form-control col-md-2" type="text"
								   name="diskonBarang" placeholder="Masukkan besar diskon">
						</div>
						<div class="form-group row">
							<label for="sisaBarang" class="text-dark text-left col-md-2">Sisa Barang</label>
							<input class="form-control col-md-1" type="number" min="0"
								   name="sisaBarang" placeholder="(satuan)">
						</div>
						<div class="form-group row">
							<label for="id_pemasok" class="text-dark text-left col-md-2">Kode Pemasok</label>
							<input class="form-control col-md-2" type="text"
								   name="id_pemasok" placeholder="Masukkan kode pemasok">
						</div>
						<div class="form-group row">
							<div class="col-md-1">
								<a class="btn btn-danger" type="button"
								   href="<?php echo base_url('admin/stok') ?>">Batal</a>
							</div>
							<div class="col-md-1">
								<input class="btn btn-primary btn-block" type="submit" name="simpan" value="Simpan">
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
	<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>
