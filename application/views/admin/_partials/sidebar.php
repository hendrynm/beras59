<!-- MULAI Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Beras59 Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center bg-white text-decoration-none"
	   href="<?php echo base_url('admin/overview') ?>"
	   style="font-family:'Lobster Two';font-size:2.5vw;color:#cd0000;text-transform:none">Beras59</a>

	<hr class="sidebar-divider my-0">

	<!-- Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('/admin/overview') ?>">
			<i class="fas fa-fw fa-home"></i>
			<span>Beranda</span>
		</a>
	</li>

	<hr class="sidebar-divider">

	<!-- Manajemen Toko -->
	<div class="sidebar-heading">
		Manajemen Toko
	</div>

	<!-- Manajemen Toko => Pesanan -->
	<li class="nav-item" id="pesanan">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePesanan"
		   aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-shopping-cart"></i>
			<span>Pesanan</span>
		</a>
		<div id="collapsePesanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Jenis Pesanan:</h6>
				<a class="collapse-item" href="<?php echo site_url('admin/pesananMasuk') ?>">Pesanan Masuk</a>
				<a class="collapse-item" id="pesananKeluar" href="<?php echo site_url('admin/pesananKeluar') ?>">Pesanan Keluar</a>
			</div>
		</div>
	</li>

	<!-- Manajemen Toko => Keuangan -->
	<li class="nav-item" id="keuangan">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeuangan"
		   aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wallet"></i>
			<span>Keuangan</span>
		</a>
		<div id="collapseKeuangan" class="collapse" aria-labelledby="headingUtilities"
			 data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Jenis Keuangan:</h6>
				<a class="collapse-item" href="<?php echo site_url('admin/pemasukan') ?>">Pemasukan</a>
				<a class="collapse-item" href="<?php echo site_url('admin/pengeluaran') ?>">Pengeluaran</a>
			</div>
		</div>
	</li>

	<!-- Manajemen Toko => Gudang -->
	<li class="nav-item" id="gudang">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGudang"
		   aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-warehouse"></i>
			<span>Gudang</span>
		</a>
		<div id="collapseGudang" class="collapse" aria-labelledby="headingUtilities"
			 data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Jenis Gudang:</h6>
				<a class="collapse-item" id="stok" href="<?php echo site_url('admin/stok') ?>">Stok</a>
				<a class="collapse-item" href="<?php echo site_url('admin/kedaluwarsa') ?>">Kedaluwarsa</a>
			</div>
		</div>
	</li>

	<hr class="sidebar-divider">

	<!-- Pengaturan -->
	<div class="sidebar-heading">
		Pengaturan
	</div>

	<!-- Pengaturan => Kelola Asisten -->
	<li class="nav-item" id="kelolaAsisten">
		<a class="nav-link" href="<?php echo base_url('admin/asisten') ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Kelola Asisten</span></a>
	</li>

	<!-- Pengaturan => Kelola Pemasok -->
	<li class="nav-item" id="kelolaPemasok">
		<a class="nav-link" href="<?php echo base_url('admin/pemasok') ?>">
			<i class="fas fa-fw fa-truck-loading"></i>
			<span>Kelola Pemasok</span></a>
	</li>

	<!-- Pengaturan => Kelola Toko (nonaktif) -->
	<li class="nav-item" id="kelolaToko">
		<a class="nav-link" href="#">
			<i class="fas fa-fw fa-cog"></i>
			<span>Kelola Toko</span></a>
	</li>

	<hr class="sidebar-divider d-none d-md-block">

	<!-- Minimalkan Sidebar -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- SELESAI Sidebar -->
