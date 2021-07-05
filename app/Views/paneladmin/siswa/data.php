<div class="card">
	<div class="card-header">
		<h6 class="card-title"><i class="fas fa-users"></i> Data Siswa
			<div class="float-right">
				<a target="_blank" href="<?php echo base_url('paneladmin/exportsiswa') ?>" class="btn btn-xs btn-dark"><i class="fas fa-file-excel"></i> Export</a>
			</div>
		</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover serverside" width="100%" cellspacing="0" style="color: #000;">
				<thead>
					<th width="5%">No</th>
					<th>Nomor</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>No HP</th>
					<th>Email</th>
					<th>Alamat</th>
					<th width="15%">Aksi</th>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		loaddatasiswa();
	});

	function loaddatasiswa() {
		$('.serverside').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				"url": "<?php echo base_url('siswa/listdata'); ?>",
				"type": "POST"
			},
			"columnDefs": [{
				"targets": [0, 1, 7],
				"orderable": false,
			}, ],
		});
	}

	function hapus(id, isi) {
		swal({
				title: "",
				text: "Anda Yakin Untuk Menghapus Siswa ID (" + id + ")?",
				type: "warning",
				showCancelButton: !0,
				confirmButtonClass: "btn-danger",
				cancelButtonClass: "btn-dark",
				confirmButtonText: "Lanjutkan",
				cancelButtonText: "Batal",
				closeOnConfirm: !1,
				showLoaderOnConfirm: !0,
			},
			function() {
				$.ajax({
					type: "GET",
					url: "<?php echo base_url('siswa/hapus'); ?>/" + id,
					cache: false,
					async: false,
					success: function(response) {
						document.location.reload();
					}
				});
			})
	}
</script>
<?php if (session()->getflashdata('msg') == 'hapus') { ?>
	<script>
		iziToast.show({
			timeout: 5000,
			color: 'red',
			title: 'Berhasil Dihapus',
			position: 'topRight',
			pauseOnHover: true,
			transitionIn: false
		});
	</script>
<?php } ?>