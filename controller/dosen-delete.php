<?php

include '../models/config.php';
$id = @$_GET['id'];

echo $id;

mysql_query("DELETE FROM tb_dosen WHERE Id = $id");


header('location:../?page=dosen&delete=true');

?>