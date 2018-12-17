<?php 

include '../models/config.php';

$id = @$_GET['id'];
$pass = md5(@$_POST['pass']);

$in = mysql_query("UPDATE users SET password= '$pass' WHERE Id = $id");

if($in)
{
header('location:../?page=ganti password&response=true');
}else
{
	header('location:../?page=ganti password&response=false');

 }
echo $id;
?>