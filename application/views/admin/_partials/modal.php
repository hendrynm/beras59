<!-- MULAI modal -->
<!-- Modal untuk Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Klik tombol <b>KELUAR</b> untuk mengakhiri sesi.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger" href="<?php echo site_url('admin/login/logout') ?>">Keluar</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal untuk Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel">Anda yakin ingin menghapus data?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Klik tombol <b>HAPUS</b> untuk menghapus data.</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger" id="btn-delete" href="#">Hapus</a>
			</div>
		</div>
	</div>
</div>
<!-- SELESAI model -->
