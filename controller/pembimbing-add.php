<?php

include '../models/config.php';

$namadosen = @$_POST['namadosen'];
$namamhs   = @$_POST['namamahasiswa'];
$jenis_bimbingan = @$_POST['jenis'];
$date = date("Y-m-d");
$judul = @$_POST['judul'];

$in = mysql_query("INSERT INTO tb_bimbingan VALUES (NULL,$namamhs, '$date', '$jenis_bimbingan', '$judul', 'proses', NULL, 0, $namadosen, NULL)");

if ($in)
{
	echo "OK";
	header('location:../?page=pembimbing&error=false');
}else
{
	echo "NOT OK";
}

?>