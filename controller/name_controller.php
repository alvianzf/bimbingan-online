<?php

// include '../models/config.php';

// session_start();

$jabatan = $_SESSION['jabatan'];
$id = $_SESSION['id'];
if ($jabatan == 'mahasiswa')
{

	$sql = mysql_query("SELECT * FROM tb_mahasiswa WHERE Id = $id");
	$qry = mysql_fetch_array($sql);
	@$_SESSION['nama_lengkap'] = $qry['nama_mahasiswa'];
	@$_SESSION['nmor'] = $qry['nim_id'];
	header('location:../?page=home');
}else
{
	$sql = mysql_query("SELECT * FROM tb_dosen WHERE Id = $id");
	$qry = mysql_fetch_array($sql);
	@$_SESSION['nama_lengkap'] = $qry['nama'];
	@$_SESSION['nmor'] = $qry['nidn'];
	header('location:../?page=home');	
}
?>