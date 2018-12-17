<?php

include '../models/config.php';

$nim =@$_POST['nim'];
$user= @$_POST['username'];
$pass =md5(@$_POST['password']);

$i = mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_id = $nim");
$p = mysql_fetch_assoc($i);
$id = $p['Id'];

$in = mysql_query("INSERT INTO users  VALUES(NULL, $id, '$user', '$pass', 'mahasiswa', 'user', 2)");

if($in)
{
	echo "good";
	header('location:../?page=pengguna');
}else
{
	// header('location:../?page=pengguna&error=true');
	echo $pass;
	echo $user;
	echo $nim;
}

?>