<!-- MULAI JavaScript -->
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- SB Admin 2 -->
<script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Menghilangkan menu dari Sidebar -->
<script>
	<?php if($this->session->userdata('bagianAsisten') != "Pemilik"): ?>
	$(document).ready(function(){
		$("#kelolaToko").remove();
		$("#kelolaPemasok").remove();
		$(".aksiAsisten").remove();
	});
	<?php endif;?>

	<?php if($this->session->userdata('bagianAsisten') == "Pelayanan"): ?>
	$(document).ready(function(){
		$("#keuangan").remove();
		$(".aksiKeuangan").remove();
		$(".aksiStok").remove();
		$(".aksiKedaluwarsa").remove();
	});
	<?php endif;?>

	<?php if($this->session->userdata('bagianAsisten') == "Operasional"): ?>
	$(document).ready(function(){
		$("#keuangan").remove();
		$("#pesananKeluar").remove();
		$(".aksiPesananMasuk").remove();
	});
	<?php endif;?>

	<?php if($this->session->userdata('bagianAsisten') == "Keuangan"): ?>
	$(document).ready(function(){
		$("#pesanan").remove();
		$("#gudang").remove();
		$(".aksiKeuangan").remove();
	});
	<?php endif;?>

	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
<!-- SELESAI JavaScript -->
