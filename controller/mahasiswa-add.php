<?php

include '../models/config.php';
$id = @$_GET['id'];

$nim =@$_POST['nim'];
$nama =@$_POST['nama'];
$prod =@$_POST['program_studi'];
$hp   =@$_POST['hp'];
$alamat=@$_POST['alamat'];

$target_dir = "../img/";
$target_file = $target_dir . $nama.".JPG";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);


$in = mysql_query("INSERT INTO tb_mahasiswa VALUES(NULL, $nim, '$nama', '$prod', '$alamat', '$hp', NULL)");

if($in)
{
	echo "good";
	header('location:../?page=mahasiswa&error=false');
}else
{
	// header('location:../?page=mahasiswa&error=true');

	echo $alamat;
	echo $hp;
	echo $nim;
	echo $nama;
	echo $hp;
}

?>