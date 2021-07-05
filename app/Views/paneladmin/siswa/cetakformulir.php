<style type="text/css">
	html {
		font-size: 10px;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}

	body {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 12px;
		line-height: 1.42857143;
		color: #000;
		background-color: #fff;
	}

	table {
		border-spacing: 0;
		border-collapse: collapse
	}

	td,
	th {
		padding: 0;
	}

	.text-left {
		text-align: left;
	}

	.text-right {
		text-align: right;
	}

	.text-center {
		text-align: center;
	}

	.text-justify {
		text-align: justify;
	}

	.text-nowrap {
		white-space: nowrap;
	}

	.text-lowercase {
		text-transform: lowercase;
	}

	.text-uppercase {
		text-transform: uppercase;
	}

	.text-capitalize {
		text-transform: capitalize;
	}

	.pull-right {
		float: right !important;
	}

	.pull-left {
		float: left !important;
	}

	.kiri {
		padding-left: 4px;
	}

	.kanan {
		padding-right: 4px;
	}

	.btop {
		border-top: 1px solid black;
	}

	.bbottom {
		border-bottom: 1px solid black;
	}

	.bleft {
		border-left: 1px solid black;
	}

	.bright {
		border-right: 1px solid black;
	}

	.ball {
		border: 1px solid black;
	}
</style>
<p class="text-center">
	<span style="font-weight: bold; font-size: 13px">FORMULIR PENERIMAAN PESERTA DIDIK BARU</span>
	<br>
	<span style="font-weight: bold; font-size: 15px">"<?php echo $app->nama_app; ?>"</span>
	<br>
	<span style="font-size: 11px;">Alamat : <?php echo $app->alamat_app; ?></span>
	<br>
	<span style="font-size: 11px;">No Telp : <?php echo $app->nohp_app; ?> E-mail : <?php echo $app->email_app; ?></span>
	<br>
	<span style="font-size: 13px">Tahun <?php echo $siswa['nama_tahun']; ?></span>
	<br>
	<hr>
</p>
<p><b>Biodata Siswa</b></p>
<table width="100%" style="font-size: 10px;" cellspacing="2">
	<tr>
		<td align="" width="5%">1. </td>
		<td width="20%">Nomer Daftar</td>
		<td width="3%">:</td>
		<td width="50%"><?php echo $siswa['nodaftar_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">2. </td>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $siswa['nama_kelas']; ?></td>
	</tr>
	<tr>
		<td align="">3. </td>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo strtoupper($siswa['nama_siswa']); ?></td>
	</tr>
	<tr>
		<td align="">4. </td>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $siswa['nik_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">5. </td>
		<td>NISN</td>
		<td>:</td>
		<td><?php echo $siswa['nisn_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">6. </td>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $siswa['jk_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">7. </td>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><?php echo $siswa['templahir_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">8. </td>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo dmy($siswa['tgllahir_siswa']); ?></td>
	</tr>
	<tr>
		<td align="">9. </td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $siswa['alamat_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">10. </td>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><?php echo $siswa['asalsekolah_siswa']; ?><br>Alamat: <?php echo $siswa['alamatasal_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">11. </td>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $siswa['email_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">12. </td>
		<td>No HP</td>
		<td>:</td>
		<td><?php echo $siswa['nohp_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">13. </td>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?php echo $siswa['nama_ayah_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">14. </td>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?php echo $siswa['nama_ibu_siswa']; ?></td>
	</tr>
	<tr>
		<td align="">15. </td>
		<td>Status</td>
		<td>:</td>
		<td><?php echo $siswa['status_siswa']; ?></td>
	</tr>
</table>
<br>
<br>
<br>
<table width="100%" style="font-size: 10px;">
	<tr>
		<td width="100%" align="right"><br><?php echo 'Baron, ' . tgl(date('d-m-Y')); ?><br></td>
	</tr>
	<tr>
		<td width="50%" align="center">Panitia PPDB <?php echo $app->nama_app; ?><br><br><br><br><br>( ................................... )</td>
		<td width="50%" align="center">Siswa Yang Mendaftar <br><br><br><br><br>( ................................... )</td>
	</tr>
</table>