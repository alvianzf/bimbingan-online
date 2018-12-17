<?php

include '../models/config.php';

$id = @$_GET['id'];


mysql_query("DELETE FROM tb_bimbingan WHERE judul = '$id'");


echo $id;
header('location:../?page=pembimbing&delete=true');

?>