      <section class="section breadcrumb-section">
        <div class="container">
          <!-- Breadcrumb-->
          <div class="breadcrumb">
            <div class="breadcrumb-inner">
              <div class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo base_url() ?>">Home</a></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">PPDB</span></div>
              <div class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Profil Siswa</span></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="text-block text-block-1 text-center">
            <h4>Perbaharui Data</h4>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-md-6">
              Baca Petunjuk PPDB <a href="javascript:;" data-featherlight="#fl1">Disini</a>

              <form class="rd-form" method="post" action="<?php echo base_url('ppdb/update'); ?>">
                <div class="form-group">
                  <label>Pilih Kelas</label>
                  <select class="form-control" id="kelas" name="kelas">
                    <?php foreach ($kelas->getresult() as $ju) {
                      if ($siswa['id_kelas_siswa'] == $ju->id_kelas) {
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
                  <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Lengkap*" data-constraints="@Required" value="<?php echo $siswa['nama_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="text" name="nik_siswa" placeholder="NIK*" data-constraints="@Required" value="<?php echo $siswa['nik_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>NISN</label>
                  <input class="form-control" type="text" name="nisn_siswa" placeholder="NISN*" data-constraints="@Required" value="<?php echo $siswa['nisn_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input class="form-control" type="text" name="templahir_siswa" placeholder="Tempat Lahir*" data-constraints="@Required" value="<?php echo $siswa['templahir_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir (contoh : tanggal-bulan-tahun)</label>
                  <input class="form-control" id="myDate" type="text" name="tgllahir_siswa" placeholder="Tanggal Lahir*" data-constraints="@Required" value="<?php echo dmy($siswa['tgllahir_siswa']); ?>">
                </div>
                <div class="form-group">
                  <label>Asal Sekolah</label>
                  <input class="form-control" type="text" name="asalsekolah_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $siswa['asalsekolah_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat Asal Sekolah</label>
                  <input class="form-control" type="text" name="alamatasal_siswa" placeholder="Alamat Asal Sekolah*" data-constraints="@Required" value="<?php echo $siswa['alamatasal_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk_siswa">
                    <option <?php if ($siswa['jk_siswa'] == "L") {
                              echo 'selected';
                            } ?> value="L">LAKI-LAKI</option>
                    <option <?php if ($siswa['jk_siswa'] == "P") {
                              echo 'selected';
                            } ?> value="P">PEREMPUAN</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" name="email_siswa" placeholder="Email*" data-constraints="@Required" value="<?php echo $siswa['email_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input class="form-control" type="number" name="nohp_siswa" placeholder="No HP*" data-constraints="@Required" value="<?php echo $siswa['nohp_siswa']; ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_siswa" placeholder="Alamat*" rows="2" data-constraints="@Required"><?php echo $siswa['alamat_siswa']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Nama Ayah</label>
                  <input class="form-control" type="text" name="nama_ayah_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $siswa['nama_ayah_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Ibu</label>
                  <input class="form-control" type="text" name="nama_ibu_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $siswa['nama_ibu_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Nomer WA</label>
                  <input class="form-control" type="text" name="wa_siswa" placeholder="Asal Sekolah*" data-constraints="@Required" value="<?php echo $siswa['wa_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Mendapatkan Info Dari?</label>
                  <select class="form-control" name="info_siswa">
                    <option <?php if ($siswa['info_siswa'] == "") {
                              echo 'selected';
                            } ?> value="">Pilih</option>
                    <option <?php if ($siswa['info_siswa'] == "Alumni") {
                              echo 'selected';
                            } ?> value="Alumni">Alumni</option>
                    <option <?php if ($siswa['info_siswa'] == "Facebook") {
                              echo 'selected';
                            } ?> value="Facebook">Facebook</option>
                    <option <?php if ($siswa['info_siswa'] == "Orang") {
                              echo 'selected';
                            } ?> value="Orang">Orang</option>
                    <option <?php if ($siswa['info_siswa'] == "Lainnya") {
                              echo 'selected';
                            } ?> value="Lainnya">Lainnya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username_siswa" placeholder="Username*" data-constraints="@Required" value="<?php echo $siswa['username_siswa']; ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="text" name="password_siswa" placeholder="Password*" data-constraints="@Required" value="<?php echo $siswa['p_siswa']; ?>">
                </div>
                <br>
                <div class="rd-form-btn text-center">
                  <button class="btn btn-primary btn-block">Perbaharui Data</button>
                </div>
              </form>

            </div>
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-title h5">Informasi</div>
                <div class="box-list">
                  <div class="box-list-item">
                    <div class="box-list-term">Kelas:</div>
                    <div class="box-list-desc"><?php echo $siswa['nama_kelas']; ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Nomer Daftar:</div>
                    <div class="box-list-desc"><?php echo $siswa['nodaftar_siswa']; ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Nama:</div>
                    <div class="box-list-desc"><?php echo $siswa['nama_siswa']; ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Status:</div>
                    <div class="box-list-desc"><?php echo $siswa['status_siswa']; ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Tanggal Daftar:</div>
                    <div class="box-list-desc"><?php echo dmywaktu($siswa['tglinput_siswa']); ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Username:</div>
                    <div class="box-list-desc"><?php echo $siswa['username_siswa']; ?></div>
                  </div>
                  <div class="box-list-item">
                    <div class="box-list-term">Password:</div>
                    <div class="box-list-desc"><?php echo $siswa['p_siswa']; ?></div>
                  </div>
                  <br>
                  <hr>
                  <a class="btn btn-primary" href="<?php echo base_url('ppdb/logout'); ?>">Logout</a>
                  <?php if ($siswa['status_siswa'] == 'KONFIRMASI') { ?>
                    <a class="btn btn-primary" target="_blank" href="<?php echo base_url('ppdb/cetakformulir/' . $siswa['token_siswa']); ?>">Cetak Formulir</a>
                  <?php } ?>
                  <h4 class="mb-3">Payment</h4>
                  <div class="container">
                    <form id="payment-form" method="post" action="<?= base_url(); ?>/snap/finish">
                      <input type="hidden" name="result_type" id="result-type" value="">
                      <input type="hidden" name="result_data" id="result-data" value="">
                      <label for="nama"><?php echo $siswa['nama_siswa']; ?></label>
                      <label for="kelas"><?php echo $siswa['nama_kelas']; ?></label>
                      <label for="nomordaftar"><?php echo $siswa['nodaftar_siswa']; ?></label>
                      <label for="jmlbayar">Jumlah Bayar</label>
                      <div class="form-group">
                        <input type="text" class="form-container" name="jmlbayar">
                      </div>
                    </form>
                  </div>
                  <!-- end form response from API Midtrans -->
                  <button class="btn btn-primary btn-lg btn-block" id="pay-button">Pay with SNAP!</button>
                </div>
              </div>
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
      <?php if (session()->getflashdata('msg') == 'edit') { ?>
        <script>
          swal("", "Update Berhasil\n", "success");
        </script>
      <?php } ?>

      <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="M106643"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script type="text/javascript">
        $('#pay-button').click(function(event) {
          event.preventDefault();
          $(this).attr("disabled", "disabled");

          var nama = $("#nama").val();
          var kelas = $("#kelas").val();
          var jmlbayar = $("#jmlbayar").val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url('midtrans/snap/token') ?>',
            data: {
              nama: nama,
              kelas: kelas,
              jmlbayar: jmlbayar
            },
            cache: false,

            success: function(data) {
              //location = data;


              console.log('token = ' + data);

              var resultType = document.getElementById('result-type');
              var resultData = document.getElementById('result-data');

              function changeResult(type, data) {
                $("#result-type").val(type);
                $("#result-data").val(JSON.stringify(data));
                //resultType.innerHTML = type;
                //resultData.innerHTML = JSON.stringify(data);
              }

              snap.pay(data, {

                onSuccess: function(result) {
                  changeResult('success', result);
                  console.log(result.status_message);
                  console.log(result);
                  $("#payment-form").submit();
                },
                onPending: function(result) {
                  changeResult('pending', result);
                  console.log(result.status_message);
                  $("#payment-form").submit();
                },
                onError: function(result) {
                  changeResult('error', result);
                  console.log(result.status_message);
                  $("#payment-form").submit();
                }
              });
            }
          });
        });
      </script>