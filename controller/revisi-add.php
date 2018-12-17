<?php

include '../models/config.php';

$id = @$_GET['id'];

$perubahan	= @$_POST['perubahan'];
$ui = mysql_query("SELECT * FROM tb_bimbingan WHERE Id = $id");
$b = mysql_fetch_assoc($ui);

$id_rev = $b['id_revisi'];


$in = mysql_query("UPDATE tb_revisi SET revisi = '$perubahan'  WHERE Id = $id_rev ORDER BY tanggal DESC");



if($in)
{
	echo "OK";
	header('location:../?page=daftar bimbingan');
	echo $idd;
}else{
	echo "NOT";
	echo $id;
	echo $perubahan;
	echo $id;
	// header('location:../?page=riwayat?error=true');
}

?>