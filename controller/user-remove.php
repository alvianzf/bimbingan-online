<?php

include '../models/config.php';
$id = @$_GET['id'];

echo $id;

mysql_query("DELETE FROM users WHERE Id = $id");


header('location:../?page=pengguna&delete=true');

?>