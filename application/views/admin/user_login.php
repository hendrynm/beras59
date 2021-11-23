<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-light">

<div class="container">
	<div class="row">
		<div class="col-12 col-md-5 text-center mt-1 mx-auto p-3">
			<h1 style="font-family:'Lobster Two';font-size:60pt;color:#cd0000;text-transform:none">Beras59</h1>
			<h1 class="h2 text-dark font-weight-bold">Selamat Datang di Beras59</h1>
			<p class="lead">Silakan masukkan nama pengguna beserta sandi untuk melanjutkan ke halaman administrasi.</p>
			<p class="text-info">Username: <b>admin</b> | Password: <b>admin</b></p>
			<?php if ($this->session->flashdata('gagal')): ?>
				<p class="alert alert-danger text-center" role="alert">
					<?php echo $this->session->flashdata('gagal'); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-5 mx-auto">
			<form action="<?= site_url('admin/login') ?>" method="POST">
				<div class="form-group">
					<label for="namaPengguna" class="font-weight-bold">Nama Pengguna</label>
					<input type="text" class="form-control" name="namaPengguna"
						   placeholder="Masukkan nama pengguna anda" required>
				</div>
				<div class="form-group">
					<label for="sandiPengguna" class="font-weight-bold">Sandi Pengguna</label>
					<input type="password" class="form-control" name="sandiPengguna"
						   placeholder="Masukkan kata sandi anda" required>
				</div>
				<div class="form-group">
					<input class="btn btn-primary btn-block" type="submit" name="masuk" value="Masuk">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-5 mx-auto mt-4">
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
</div>
</body>
</html>
