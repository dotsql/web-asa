      <section class="section breadcrumb-section">
        <div class="container">
          <!-- Breadcrumb-->
          <div class="breadcrumb">
            <div class="breadcrumb-inner">
              <div class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo base_url() ?>">Home</a></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">PPDB</span></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Login Siswa</span></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="text-block text-block-1 text-center">
            <h4>Login Siswa Baru</h4>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-md-4">
              <?php if(session()->getflashdata('msg')=='gagal'){ ?>
              <p class="text-danger"><b><i class="fa fa-exclamation"></i> Login Gagal</b></p>
              <?php } ?>
              Baca Petunjuk PPDB <a href="javascript:;" data-featherlight="#fl1">Disini</a>
              <form class="rd-form" method="post" action="<?php echo base_url('ppdb/authlogin'); ?>">
                <div class="form-group">
                  <input class="form-control" type="text" name="username" placeholder="Username*" required="" data-constraints="@Required">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="password" placeholder="Password*" required="" data-constraints="@Required">
                </div>
                <br>
                <div class="rd-form-btn text-center">
                  <button class="btn btn-primary btn-block">Login</button>
                </div>
                <p class="text-center">Daftar Siswa Baru <a href="<?php echo base_url('ppdb/daftar'); ?>">Disini</a></p>
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