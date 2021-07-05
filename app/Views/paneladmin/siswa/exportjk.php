<?php
$this->request = \Config\services::request();

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataSiswa-" . time() . ".xls");
?>
<table border="1">
	<tr>
		<td colspan="20" height="25" style="background-color: #87CEFA;">Data Siswa <?php echo strtoupper(jk($this->request->getpost('opsi'))) . ' ' . $tahun['nama_tahun']; ?> </td>
	</tr>
	<tr style="text-align: center; text-transform: uppercase;">
		<td style="background-color: #20B2AA;" width="5%" height="25">No</td>
		<td style="background-color: #20B2AA;">Tahun</td>
		<td style="background-color: #20B2AA;">No Daftar</td>
		<td style="background-color: #20B2AA;">Kelas</td>
		<td style="background-color: #20B2AA;">Nama</td>
		<td style="background-color: #20B2AA;">NIK</td>
		<td style="background-color: #20B2AA;">NISN</td>
		<td style="background-color: #20B2AA;">L/P</td>
		<td style="background-color: #20B2AA;">TTL</td>
		<td style="background-color: #20B2AA;">Email</td>
		<td style="background-color: #20B2AA;">No HP</td>
		<td style="background-color: #20B2AA;">Alamat</td>
		<td style="background-color: #20B2AA;">Asal Sekolah</td>
		<td style="background-color: #20B2AA;">Alamat Asal Sekolah</td>
		<td style="background-color: #20B2AA;">Ayah</td>
		<td style="background-color: #20B2AA;">Ibu</td>
		<td style="background-color: #20B2AA;">Username</td>
		<td style="background-color: #20B2AA;">Password</td>
		<td style="background-color: #20B2AA;">Status</td>
		<td style="background-color: #20B2AA;">Tanggal</td>
	</tr>

	<?php $no = 1;
	foreach ($siswa->getresult() as $r) { ?>
		<tr>
			<td style="text-align: center;"><?php echo $no; ?></td>
			<td style="text-align: center;"><?php echo $r->nama_tahun; ?></td>
			<td style="text-align: center;"><?php echo $r->nodaftar_siswa; ?></td>
			<td><?php echo $r->nama_kelas; ?></td>
			<td><?php echo $r->nama_siswa; ?></td>
			<td>'<?php echo $r->nik_siswa; ?></td>
			<td>'<?php echo $r->nisn_siswa; ?></td>
			<td style="text-align: center;"><?php echo $r->jk_siswa; ?></td>
			<td><?php echo $r->templahir_siswa . ', ' . dmy($r->tgllahir_siswa); ?></td>
			<td><?php echo $r->email_siswa; ?></td>
			<td>'<?php echo $r->nohp_siswa; ?></td>
			<td><?php echo $r->alamat_siswa; ?></td>
			<td><?php echo $r->asalsekolah_siswa; ?></td>
			<td><?php echo $r->alamatasal_siswa; ?></td>
			<td><?php echo $r->nama_ayah_siswa; ?></td>
			<td><?php echo $r->nama_ibu_siswa; ?></td>
			<td><?php echo $r->username_siswa; ?></td>
			<td><?php echo $r->p_siswa; ?></td>
			<td><?php echo $r->status_siswa; ?></td>
			<td><?php echo dmy($r->tglinput_siswa); ?></td>
		</tr>
	<?php $no++;
	} ?>
</table>