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

				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h2 mb-0 text-gray-800">Selamat Datang <br>
					<b><?php echo $this->session->userdata('namaAsisten'); ?></b></h1>
					<div class="mt-1 form-group align-content-end">
						<span class="font-weight-bold">Hak Akses: </span>
						<p class="text-primary font-weight-bold">
							<?php echo $this->session->userdata('bagianAsisten'); ?></p>
					</div>
				</div>

				<hr>
				<div class="mt-4 col-md-6">
				<p class="row h4 font-weight-bold text-primary">Laporan 30 Hari Terakhir</p>
				<p class="row text-dark">
					<?php echo "<b>Tanggal: </b>".
							date('d/m/Y', strtotime('-29 days'))." - ".date('d/m/Y')?></p>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6 mb-4 aksiKeuangan">
						<div class="card border-left-danger shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-s font-weight-bold text-danger text-uppercase mb-1">
											Pesanan Masuk</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php echo $pesananMasuk." Paket" ?>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-cash-register fa-2x text-danger"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4 aksiPesananMasuk aksiKeuangan">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-s font-weight-bold text-success text-uppercase mb-1">
											Pesanan Keluar</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php echo $pesananKeluar." Paket" ?>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-truck fa-2x text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4 aksiPesananMasuk">
						<div class="card border-left-info shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-s font-weight-bold text-dark text-uppercase mb-1">
											Pemasukan</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php
											$uangMasuk = $pemasukan->jumlahPemasukan;
											echo "Rp".number_format($uangMasuk,0,",",".");
											?>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-hand-holding-usd fa-2x text-info"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4 aksiPesananMasuk">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-s font-weight-bold text-dark text-uppercase mb-1">
											Pengeluaran</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php
											$uangKeluar = $pengeluaran->jumlahPengeluaran;
											echo "Rp".number_format($uangKeluar,0,",",".");
											?>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-cart-plus fa-2x text-warning"></i>
									</div>
								</div>
							</div>
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
