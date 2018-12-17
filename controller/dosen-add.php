<?php

include '../models/config.php';
$id = @$_GET['id'];

$nidn =@$_POST['nidn'];
$nama =@$_POST['nama'];
$prod =@$_POST['program_studi'];
$hp   =@$_POST['hp'];

$target_dir = "../img/";
$target_file = $target_dir . $nama.".JPG";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

$in = mysql_query("INSERT INTO tb_dosen VALUES(NULL, $nidn, '$nama', '$prod', '$hp', NULL)");

if($in)
{
	echo "good";
	header('location:../?page=dosen&error=false');
}else
{
	header('location:../page=dosen&error=true');
}

?>