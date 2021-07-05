      <section class="section breadcrumb-section">
        <div class="container">
          <!-- Breadcrumb-->
          <div class="breadcrumb">
            <div class="breadcrumb-inner">
              <div class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo base_url() ?>">Home</a></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">PPDB</span></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Daftar Siswa</span></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="text-block text-block-1 text-center">
            <h4>Daftar Siswa Baru</h4>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-md-6">
              Baca Petunjuk PPDB <a href="javascript:;" data-featherlight="#fl1">Disini</a>
              <form class="rd-form" id="formdaftar" method="post">
                <div class="form-group">
                  <select class="form-control" id="kelas" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <?php foreach ($kelas->getresult() as $ju) {
                      echo '<option value="' . $ju->id_kelas . '">' . $ju->nama_kelas . '</option>';
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Lengkap*" required="" data-constraints="@Required">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="email_siswa" placeholder="Email*" required="" data-constraints="@Required">
                </div>
                <div class="form-group">
                  <input class="form-control" type="number" name="nohp_siswa" placeholder="No HP*" required="" data-constraints="@Required">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="asalsekolah_siswa" placeholder="Asal Sekolah*" required="" data-constraints="@Required">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="alamat_siswa" placeholder="Alamat*" rows="2" required="" data-constraints="@Required"></textarea>
                </div>
                <br>
                <div class="rd-form-btn text-center">
                  <button class="btn btn-primary btn-block">Daftar</button>
                </div>
                <p class="text-center">Login Siswa Baru <a href="<?php echo base_url('ppdb/login'); ?>">Disini</a></p>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div class="lightbox" id="fl1">
        <b>Berikut Petunjuk Penerimaan Peserta Didik Baru :</b>
        <ul>
          <li>1. Silahkan ke menu <b>Daftar</b> atau klik <a href="<?php echo base_url('ppdb/daftar'); ?>">Disini.</a></li>
          <li>2. Jika sudah punya akun silahkan login <a href="<?php echo base_url('ppdb/login'); ?>">Disini.</a></li>
          <li>3. Isikan biodata anda dengan benar dan pastikan email bisa menerima inbox/spam berisi detail akun anda.</li>
          <li>4. Klik daftar dan tunggu beberapa saat sampai pendaftaran berhasil dan anda akan diarahkan ke halaman profil.</li>
          <li>5. Lengkapi biodata anda supaya Panitia (Admin) cepat mengkonfirmasi.</li>
          <li>6. Tunggu sampai anda dikonfirmai dan akan mendapatkan inbox ke email anda.</li>
          <li>7. Silahkan cetak formulir pendaftaran dengan cara login dengan username password anda.</li>
          <li>8. Setelah mendownload/mencetak formulir, bawa formulir tersebut ke Pihak Panitia PPDB sesuai tanggal yang ditentukan.</li>
          <li>9. Ada pertanyaan silahkan klik <a href="<?php echo base_url('kontak'); ?>">Disini.</a></li>
        </ul>
      </div>
      <script type="text/javascript">
        $('#formdaftar').submit(function(e) {
          var kelas = $('#kelas').val();
          if (kelas != "") {
            swal({
                title: "",
                text: "Lanjutkan Mendaftar PPDB?\nAnda akan menerima email dari Admin PPDB. Periksa inbox/spam email.\n",
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
                  url: "<?php echo base_url('ppdb/authdaftar'); ?>",
                  data: $('#formdaftar').serialize(),
                  cache: false,
                  success: function(response) {
                    if (response == "oke") {
                      swal("", "Pendaftaran Berhasil\n", "success");
                      document.location.href = "<?php echo base_url('ppdb/profil'); ?>";
                    } else if (response == 'email') {
                      swal("", "Email Sudah Terdaftar", "warning");
                    } else {
                      swal("", "Pendaftaran Gagal Diproses", "error");
                    }
                  }
                });
              })
          } else {
            alert("Periksa Inputan");
            swal.close();
          }
          return false;
        })
      </script>