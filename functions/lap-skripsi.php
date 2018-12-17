<?php

ob_start();
error_reporting(0);

?>

<html>
<body>
<?php

include '../models/config.php';

$id = @$_GET['id'];
$role = @$_GET['role'];

if($role == 'mahasiswa')
{
	$ss = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_bimbingan WHERE nim_id= $id AND jenis_bimbingan = 'Skripsi'"));
	$mhs = $ss['nim_id'];
	$dos = $ss['nidn_id'];
	$na = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_id = $mhs "));
	$ma = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_dosen WHERE nidn = $dos "));
	$nama_mhs = $na['nama_mahasiswa'];
	$nama_dosen = $ma['nama'];
	$nama = $nama_mhs;
}else{
	$ss = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_bimbingan WHERE nidn_id= $id AND jenis_bimbingan = 'Skripsi'"));
	$mhs = $ss['nim_id'];
	$dos = $ss['nidn_id'];
	$na = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_id = $mhs "));
	$ma = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_dosen WHERE nidn = $dos "));
	$nama_mhs = $na['nama_mahasiswa'];
	$nama_dosen = $ma['nama'];
	$nama = $nama_dosen;
}

$date = date("d/m/Y");

?>
<div style="text-align: center;">
	<h3 >Laporan Bimbingan Skripsi Mahasiswa</h3>
	<h4><?=$nama;?></h4>
</div>
<br/><br/>

<div style="align-items: center;">
	<table style="border: 1px solid black; border-collapse: collapse; width: 200px; table-layout: fixed; word-wrap: break-word;">
		<thead>
		<tr>
			<th style="border: 1px solid black; padding: 5px">No</th>
			<th style="border: 1px solid black; padding: 5px">Judul</th>
			<th style="border: 1px solid black; padding: 5px">NIM</th>
			<th style="border: 1px solid black; padding: 5px">Nama Pembimbing</th>
			<th style="border: 1px solid black; padding: 5px">NIDN</th>
			<th style="border: 1px solid black; padding: 5px">Bimbingan Ke</th>
			<th style="border: 1px solid black; padding: 5px; max-width: 100px">Daftar Perubahan</th>
			<th style="border: 1px solid black; padding: 5px; max-width: 100px">Revisi</th>
		</tr>
		</thead>
		<tbody>
		
<?php
		$no =1;
		if($role =='mahasiswa')
		{
		$sql= mysql_query("SELECT * FROM tb_bimbingan WHERE nim_id= $mhs AND jenis_bimbingan = 'Skripsi'");
		}else{
		$sql= mysql_query("SELECT * FROM tb_bimbingan WHERE nidn_id = $dos AND jenis_bimbingan = 'Skripsi'");
		}
		while($data= mysql_fetch_assoc($sql))
		{
			$id_rev = $data['id_revisi'];
			$rev = mysql_fetch_assoc(mysql_query("SELECT * FROM tb_revisi WHERE Id = $id_rev"))
			

?>
	<tr>
		<td style="border: 1px solid black; padding: 5px"><?=$no;?></td>
		<td style="border: 1px solid black; padding: 5px; word-wrap: break-word;"><?=$data['judul'];?></td>
		<td style="border: 1px solid black; padding: 5px"><?=$data['nim_id'];?></td>
		<td style="border: 1px solid black; padding: 5px; word-wrap: break-word;"><?=$nama_dosen ?></td>
		<td style="border: 1px solid black; padding: 5px"><?=$data['nidn_id'];?></td>
		<td style="border: 1px solid black; padding: 5px"><?=$data['status'];?></td>
		<td style="border: 1px solid black; padding: 5px; word-wrap: break-word;"><?=wordwrap($rev['perubahan'], 15, '<br/>', true);?></td>
		<td style="border: 1px solid black; padding: 5px; word-wrap: break-word;"><?=
 wordwrap($rev['revisi'], 20, '<br />', true);?></td>
	</tr>
<?php
		$no++;
		}

?>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td style="text-align: center">Tanjungpinang <?=$date?>, </td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td style="text-align: center">Pembimbing</td>
</tr>

<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td style="text-align: center"><b><?=$nama_dosen?></b></td>
</tr>
</tbody>

	</table>
</div>



</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output( 'lap_skripsi'.$nama_mhs.'-'.$nama_dosen.'.pdf','D');
?>
