<?php 
$data= $siswa->getrowarray();
?>
<div class="card">
   <div class="card-disabled" id="spin" style="display: none;"><div class="card-portlets-loader"></div></div>
   <div class="card-header">
      <h6 class="card-title"><i class="fas fa-redo"></i> Update Data Siswa
      <div class="float-right">
         <a href="<?php echo base_url('paneladmin/siswa') ?>" class="btn btn-xs btn-light"><i class="fa fa-arrow-left"></i> Data Siswa</a>
      </div>
      </h6>
   </div>
   <div class="card-body" id="data">
	</div>
</div>
<script type="text/javascript">
   $(function(){
      loadsiswa();
   });
   function loadsiswa(id){
      $.ajax({
         type : "GET",
         url : "<?php echo base_url('paneladmin/loadsiswa?siswa='.$data['id_siswa']) ?>",
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