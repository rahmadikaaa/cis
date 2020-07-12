<!-- /.sidebar-menu -->
<!-- /.sidebar -->

<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.0.5
	</div>
	<strong>Copyright Carikost Inventory Sistem © 2020 <a href="http://adminlte.io">carikost.id</a>.</strong> All rights
	reserved.
</footer>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
<!-- page script -->
<script>
	function previewImg() {
		const property_picture = document.querySelector('#property_picture');
		const imgPreview = document.querySelector('.img-preview');

		const fileSampul = new FileReader();
		fileSampul.readAsDataURL(property_picture.files[0])

		fileSampul.onload = function(e) {
			imgPreview.src = e.target.result;
		}
	}

	function previewImg() {
		const booking_img_ktp = document.querySelector('#booking_img_ktp');
		const imgPreview = document.querySelector('.img-preview');

		const fileSampul = new FileReader();
		fileSampul.readAsDataURL(booking_img_ktp.files[0])

		fileSampul.onload = function(e) {
			imgPreview.src = e.target.result;
		}
	}


	$('#myModal').on('shown.bs.modal', function() {
		$('#myInput').trigger('focus')
	})
	// datatable
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});

	// function rupiah
	var rupiah = document.getElementById('rupiah');
	rupiah.addEventListener('keyup', function(e) {
		// tambahkan 'Rp.' pada saat form di ketik
		// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		rupiah.value = formatRupiah(this.value, 'Rp. ');
	});

	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
</body>

</html>