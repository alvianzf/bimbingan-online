<?php

include '../models/config.php';
$id = @$_GET['id'];

echo $id;

mysql_query("DELETE FROM tb_bimbingan WHERE Id = $id");


header('location:../?page=riwayat&delete=true');

?>