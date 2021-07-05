<div class="card">
   <div class="card-disabled" id="spin" style="display: none;"><div class="card-portlets-loader"></div></div>
   <div class="card-header">
      <h6 class="card-title"><i class="fas fa-redo"></i> Cari & Update Data Siswa
      <div class="float-right">
         <a href="<?php echo base_url('paneladmin/siswa') ?>" class="btn btn-xs btn-light"><i class="fa fa-arrow-left"></i> Data Siswa</a>
      </div>
      </h6>
   </div>
   <div class="card-body">
      <div class="input-group">
         <input type="text" class="form-control" placeholder="Nama Siswa Atau Nomer Daftar" name="q" autofocus="">
         <div class="input-group-append">
            <button class="btn btn-dark waves-effect waves-light" id="btcari" type="button" onclick="cari()"><i class="fa fa-search"></i> Cari Siswa</button>
         </div>
      </div>
      <hr>
      <div id="data"></div>
	</div>
</div>
<script type="text/javascript">
   function cari(){
      var que= $('[name="q"]').val();
      $.ajax({
         dataType : "JSON",
         type : "POST",
         url : "<?php echo base_url('siswa/carisiswa') ?>",
         data: {
            q: que,
         },
         beforeSend : function(){
            $('#btcari').html('Loading...').show();
            $('#data').html('<br><p class="text-center text-danger">Sedang Mencari Data...</p>').show();
         },
         success : function(response){
            $('#btcari').html('<i class="fa fa-search"></i> Cari Siswa').show();
            if(response[0].id_siswa!=null){
               loadsiswa(response[0].id_siswa);
            }
            else{
               $('#data').html('<br><p class="text-center text-danger">Data Tidak Ditemukan</p>').show();
            }
         }
      })
   }
   function loadsiswa(id){
      $.ajax({
         type : "GET",
         url : "<?php echo base_url('paneladmin/loadsiswa?siswa=') ?>"+id,
         beforeSend : function(){
            document.getElementById('spin').style.display="block";
         },
         success : function(html){
            $('#data').html(html).show();
            document.getElementById('spin').style.display="none";
         }
      })
   }
</script>