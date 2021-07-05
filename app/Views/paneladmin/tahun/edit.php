<div class="modal fade" id="modedit" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
      	<div class="modal-header">
				<h5 class="modal-title"><b>Edit Tahun Ajaran </b></h5>
      	</div>
			<form action="<?php echo base_url('tahun/edit') ?>" method="post" enctype="multipart/form-data">
			
         <input type="hidden" name="id_tahun" id="" class="form-control" value="<?php echo $tahun->id_tahun; ?>">
      	<div class="modal-body">
      		<div class="form-group">
               <label for="">Nama Tahun Ajaran</label>
               <input type="text" name="nama_tahun" id="" class="form-control" value="<?php echo $tahun->nama_tahun; ?>">
            </div>
            <div class="form-group">
               <label for="">Keterangan</label>
               <input type="text" name="ket_tahun" id="" class="form-control" value="<?php echo $tahun->ket_tahun; ?>">
            </div>
            <div class="form-group">
               <label for="">Status</label>
               <select class="form-control" name="aktif_tahun">
                  <option <?php if($tahun->aktif_tahun=="0"){ echo 'selected'; } ?> value="0">NON AKTIF</option>
                  <option <?php if($tahun->aktif_tahun=="1"){ echo 'selected'; } ?> value="1">AKTIF</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">PPDB</label>
               <select class="form-control" name="ppdb_tahun">
                  <option <?php if($tahun->ppdb_tahun=="0"){ echo 'selected'; } ?> value="0">NON AKTIF</option>
                  <option <?php if($tahun->ppdb_tahun=="1"){ echo 'selected'; } ?> value="1">AKTIF</option>
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