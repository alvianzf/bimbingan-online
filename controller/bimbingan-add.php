<?php
include '../models/config.php';

$id = @$_GET['id'];

$perubahan	= @$_POST['perubahan'];

$date = date('Y-m-d H:i:s');
$tgl = date('Y-m-d');



$u = mysql_query("SELECT * FROM tb_bimbingan WHERE nim_id = $id ORDER BY Id DESC");
$data = mysql_fetch_assoc($u);

$jenis_bimbingan = $data['jenis_bimbingan'];
$judul = $data['judul'];
$keterangan = $data['keterangan'];
$status = $data['status'];
$nidn = $data['nidn_id'];

$bim = $status +1;

$In = mysql_query("INSERT INTO tb_revisi VALUES (NULL, $id, NULL, '$perubahan', NULL, 'sedang direvisi', '$date')");

$u9 = mysql_query("SELECT * FROM tb_revisi WHERE nim_id = $id ORDER BY Id DESC");
$u9p=mysql_fetch_assoc($u9);

$idrev = $u9p['Id'];

if ($idrev == 0)


$target_dir	='';
$target_dir = "../docs/";
$target_file = $target_dir . $judul.'-'.$bim.'.pdf';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	move_uploaded_file($_FILES["dokumen"]["tmp_name"], $target_file);
	// echo $imageFileType;


$in = mysql_query("INSERT INTO tb_bimbingan VALUES (NULL, '$id', '$tgl', '$jenis_bimbingan', '$judul', '$keterangan', NULL, '$bim', '$nidn', '$idrev')");

echo $id;

if($in)
{
	echo "ip";
	header('location:../?page=riwayat&error=false');
}else {
	header('location:../?page=riwayat&error=true');
}

// header('location:../?page=riwayat');

?>