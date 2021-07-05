<?php
$data = $siswa->getrowarray();
?>
<div class="row">
   <div class="col-md-6">
      <form method="post" id="formupdate">
         <input type="hidden" name="siswa" value="<?php echo $data['id_siswa']; ?>">
         <div class="form-group">
            <label>Pilih Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
               <?php foreach ($kelas->getresult() as $ju) {
                  if ($data['id_kelas_siswa'] == $ju->id_kelas) {
                     $selj = 'selected';
                  } else {
                     $selj = '';
                  }
                  echo '<option ' . $selj . ' value="' . $ju->id_kelas . '">' . $ju->nama_kelas . '</option>';
               } ?>
            </select>
         </div>
         <div class="form-group">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Lengkap*" value="<?php echo $data['nama_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>NIK</label>
            <input class="form-control" type="text" name="nik_siswa" placeholder="NIK*" data-constraints="@Required" value="<?php echo $data['nik_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>NISN</label>
            <input class="form-control" type="text" name="nisn_siswa" placeholder="NISN*" data-constraints="@Required" value="<?php echo $data['nisn_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Tempat Lahir</label>
            <input class="form-control" type="text" name="templahir_siswa" placeholder="Tempat Lahir*" data-constraints="@Required" value="<?php echo $data['templahir_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Tanggal Lahir (contoh : tanggal-bulan-tahun)</label>
            <input class="form-control" id="myDate" type="text" name="tgllahir_siswa" placeholder="Tanggal Lahir*" data-constraints="@Required" value="<?php echo dmy($data['tgllahir_siswa']); ?>">
         </div>
         <div class="form-group">
            <label>Asal Sekolah</label>
            <input class="form-control" type="text" name="asalsekolah_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $data['asalsekolah_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Alamat Asal Sekolah</label>
            <input class="form-control" type="text" name="alamatasal_siswa" placeholder="Alamat Asal Sekolah*" data-constraints="@Required" value="<?php echo $data['alamatasal_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk_siswa">
               <option <?php if ($data['jk_siswa'] == "L") {
                           echo 'selected';
                        } ?> value="L">LAKI-LAKI</option>
               <option <?php if ($data['jk_siswa'] == "P") {
                           echo 'selected';
                        } ?> value="P">PEREMPUAN</option>
            </select>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email_siswa" placeholder="Email*" data-constraints="@Required" value="<?php echo $data['email_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>No HP</label>
            <input class="form-control" type="number" name="nohp_siswa" placeholder="No HP*" data-constraints="@Required" value="<?php echo $data['nohp_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_siswa" placeholder="Alamat*" rows="2" data-constraints="@Required"><?php echo $data['alamat_siswa']; ?></textarea>
         </div>
         <div class="form-group">
            <label>Nama Ayah</label>
            <input class="form-control" type="text" name="nama_ayah_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $data['nama_ayah_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Nama Ibu</label>
            <input class="form-control" type="text" name="nama_ibu_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $data['nama_ibu_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Nomer WA</label>
            <input class="form-control" type="text" name="wa_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $data['wa_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Mendapatkan Info Dari?</label>
            <select class="form-control" name="info_siswa">
               <option <?php if ($data['info_siswa'] == "") {
                           echo 'selected';
                        } ?> value="">Pilih</option>
               <option <?php if ($data['info_siswa'] == "Alumni") {
                           echo 'selected';
                        } ?> value="Alumni">Alumni</option>
               <option <?php if ($data['info_siswa'] == "Facebook") {
                           echo 'selected';
                        } ?> value="Facebook">Facebook</option>
               <option <?php if ($data['info_siswa'] == "Orang") {
                           echo 'selected';
                        } ?> value="Orang">Orang</option>
               <option <?php if ($data['info_siswa'] == "Lainnya") {
                           echo 'selected';
                        } ?> value="Lainnya">Lainnya</option>
            </select>
         </div>
         <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username_siswa" placeholder="Username*" data-constraints="@Required" value="<?php echo $data['username_siswa']; ?>">
         </div>
         <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="text" name="password_siswa" placeholder="Password*" data-constraints="@Required" value="<?php echo $data['p_siswa']; ?>">
         </div>
         <button class="btn btn-primary" id="btpro"><i class="fa fa-redo"></i> Perbaharui Data</button>
      </form>
   </div>
   <div class="col-md-6">
      <div class="card">
         <div class="card-header bg-warning  py-3 text-white">
            <h5 class="card-title mb-0 text-white">Informasi</h5>
         </div>
         <div id="cardCollpase5" class="collapse show">
            <div class="card-body">
               <table style="font-size: 14px;" cellpadding="3">
                  <tr>
                     <td>Kelas</td>
                     <td>: <?php echo $data['nama_kelas']; ?></td>
                  </tr>
                  <tr>
                     <td>Nomer Daftar</td>
                     <td>: <?php echo $data['nodaftar_siswa']; ?></td>
                  </tr>
                  <tr>
                     <td>Nama</td>
                     <td>: <?php echo $data['nama_siswa']; ?></td>
                  </tr>
                  <tr>
                     <td>Status</td>
                     <td>: <?php echo $data['status_siswa']; ?></td>
                  </tr>
                  <tr>
                     <td>Tanggal Daftar</td>
                     <td>: <?php echo dmywaktu($data['tglinput_siswa']); ?></td>
                  </tr>
                  <tr>
                     <td>Username</td>
                     <td>: <?php echo $data['username_siswa']; ?></td>
                  </tr>
                  <tr>
                     <td>Password</td>
                     <td>: <?php echo $data['p_siswa']; ?></td>
                  </tr>
               </table>
            </div>
            <div class="card-footer">
               <?php if ($data['status_siswa'] == 'PENDING') { ?>
                  <a href="javascript:;" class="btn btn-success" onclick="konfirmasi()"><i class="fa fa-check"></i> Konfirmasi</a>
               <?php } else { ?>
                  <a href="javascript:;" class="btn btn-danger" onclick="batal()"><i class="fa fa-ban"></i> Batal</a>
                  <a target="_blank" href="<?php echo base_url('ppdb/cetakformulir/' . $data['token_siswa']); ?>" class="btn btn-info"><i class="fas fa-file-pdf"></i> Cetak Formulir</a>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script type="text/javascript">
   $('#formupdate').submit(function(e) {
      $.ajax({
         type: "POST",
         url: "<?php echo base_url('siswa/updatesiswa'); ?>",
         data: $('#formupdate').serialize(),
         beforeSend: function() {
            $('#btpro').html("Sedang Diproses...").show();
         },
         success: function(response) {
            $('#btpro').html('<i class="fa fa-redo"></i> Perbaharui Data').show();
            swal("", "Update Berhasil\n", "success");
            loadsiswa('<?php echo $data['id_siswa']; ?>');
         }
      });
      return false;
   })

   function konfirmasi() {
      var nama = "<?php echo $data['nama_siswa']; ?>";
      swal({
            title: "",
            text: "Lanjutkan Konfirmasi Siswa (" + nama + ")?\n Siswa akan menerima email bahwa dia sudah dikonfirmasi dan diterima di sebagai siswa baru.",
            type: "warning",
            showCancelButton: !0,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Lanjutkan",
            cancelButtonText: "Batal",
            closeOnConfirm: !1,
            showLoaderOnConfirm: !0,
         },
         function() {
            $.ajax({
               type: "POST",
               url: "<?php echo base_url('ppdb/konfirmasi?siswa=' . $data['id_siswa']); ?>",
               cache: false,
               success: function(response) {
                  if (response == "oke") {
                     swal("", "Konfirmasi Berhasil\n", "success");
                     loadsiswa('<?php echo $data['id_siswa']; ?>');
                  } else {
                     swal("", "Gagal Diproses\n", "error");
                  }
               }
            });
         })
   }

   function batal() {
      var nama = "<?php echo $data['nama_siswa']; ?>";
      swal({
            title: "",
            text: "Membatalkan Konfirmasi Siswa (" + nama + ")?\n",
            type: "warning",
            showCancelButton: !0,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Lanjutkan",
            cancelButtonText: "Batal",
            closeOnConfirm: !1,
            showLoaderOnConfirm: !0,
         },
         function() {
            $.ajax({
               type: "POST",
               url: "<?php echo base_url('ppdb/batal?siswa=' . $data['id_siswa']); ?>",
               cache: false,
               success: function(response) {
                  swal("", "Konfirmasi Dibatalkan\n", "warning");
                  loadsiswa('<?php echo $data['id_siswa']; ?>');
               }
            });
         })
   }
</script>