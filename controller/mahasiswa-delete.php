<?php

include '../models/config.php';
$id = @$_GET['id'];

echo $id;

mysql_query("DELETE FROM tb_mahasiswa WHERE Id = $id");


header('location:../?page=mahasiswa&delete=true');

?>