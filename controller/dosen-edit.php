<?php

include '../models/config.php';

$id = @$_GET['id'];

$nim =@$_POST['nidn'];
$nama =@$_POST['nama'];
$prod =@$_POST['program_studi'];
$hp   =@$_POST['hp'];

$in = mysql_query("UPDATE tb_dosen SET nama = '$nama', nidn = $nim, program_studi = '$prod', nomor_hp = '$hp' WHERE Id = $id");

if ($in)
{
	echo 'OK';
	header('location:../?page=dosen&edit=true');
}else
{
	echo "NOT OK";
	// header('location:../?page=dosen&edit=false');
	echo $nama;
	echo $nim;
	echo $prod;
	echo $hp;
	echo $id;
}

?>