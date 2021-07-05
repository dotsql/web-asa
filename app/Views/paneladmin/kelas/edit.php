<div class="modal fade" id="modedit" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b>Edit kelas </b></h5>
         </div>
         <form action="<?php echo base_url('kelas/edit') ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="fotolama" value="<?php echo $kelas->foto_kelas; ?>">
            <input type="hidden" name="id_kelas" id="" class="form-control" value="<?php echo $kelas->id_kelas; ?>">
            <div class="modal-body">
               <div class="form-group">
                  <label for="">Nama kelas</label>
                  <input type="text" name="nama_kelas" class="form-control" value="<?php echo $kelas->nama_kelas; ?>">
               </div>
               <div class="form-group">
                  <label for="">Guru Pembimbing</label>
                  <input type="text" name="wali_kelas" class="form-control" value="<?php echo $kelas->wali_kelas; ?>">
               </div>
               <div class="form-group">
                  <label for="">Link kelas</label>
                  <input type="text" name="link_kelas" class="form-control" value="<?php echo $kelas->link_kelas; ?>">
               </div>
               <div class="form-group">
                  <label for="">Jumlah Siswa</label>
                  <input type="text" name="siswa_kelas" class="form-control" value="<?php echo $kelas->siswa_kelas; ?>">
               </div>
               <?php if (file_exists(foto('400', 'kelas', $kelas->foto_kelas))) { ?>
                  <img src="<?php echo base_url(foto('400', 'kelas', $kelas->foto_kelas)) ?>" class="img-thumbnail" style="margin-bottom: 10px;">
               <?php } ?>
               <div class="form-group">
                  <label for="">Foto kelas</label>
                  <input type="file" name="foto_kelas" class="form-control">
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