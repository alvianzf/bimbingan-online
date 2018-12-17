<?php

include '../models/config.php';

$id = @$_GET['id'];

$nim =@$_POST['nim'];
$nama =@$_POST['nama'];
$prod =@$_POST['program_studi'];
$hp   =@$_POST['hp'];
$alamat=@$_POST['alamat'];

$in = mysql_query("UPDATE tb_mahasiswa SET nama_mahasiswa = '$nama', nim_id = $nim, program_studi = '$prod', nomor_hp = '$hp', alamat='$alamat' WHERE Id = $id");

if ($in)
{
	echo 'OK';
	header('location:../?page=mahasiswa&edit=true');
}else
{
	echo "NOT OK";
	header('location:../?page=mahasiswa&edit=false');
}

?>