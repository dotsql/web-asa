<div class="modal fade" id="modtambah" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
      	<div class="modal-header">
				<h5 class="modal-title"><b>Tambah Tahun Ajaran</b></h5>
      	</div>
			<form action="<?php echo base_url('tahun/tambah') ?>" method="post" enctype="multipart/form-data">
			
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Tahun Ajaran</label>
               <input type="text" name="nama_tahun" id="" class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Keterangan</label>
               <input type="text" name="ket_tahun" id="" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Status</label>
               <select class="form-control" name="aktif_tahun">
                  <option value="0">NON AKTIF</option>
                  <option value="1">AKTIF</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">PPDB</label>
               <select class="form-control" name="ppdb_tahun">
                  <option value="0">NON AKTIF</option>
                  <option value="1">AKTIF</option>
               </select>
            </div>
      	</div>
      	<div class="modal-footer">
      		<button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
      		<a href="javascript:void(0)" class="btn btn-dark" data-dismiss="modal">Tutup</a>
      	</div>
      	</form>
      </div>
   </div>
</div>