<?php

session_start();
include '../models/config.php';

$username = @$_POST['name'];

$passw 	  = md5(@$_POST['password']);

$in = mysql_query("SELECT * FROM users WHERE username = '$username'");
$login = mysql_fetch_assoc($in);
$pwd = $login['password'];

if ( $pwd == $passw)
{

	$_SESSION['log'] = $login['auth'];
	$_SESSION['name']= $username;
	$_SESSION['jabatan']= $login['jabatan'];
	$_SESSION['role']=$login['role'];
	$_SESSION['id']=$login['reg_id'];
	$_SESSION['user_id'] = $login['Id'];
	$_SESSION['id']=$login['reg_id'];

	
	header('location:../?page=home');
}else
{
	header('location:index.html');
	echo '<br/> inputan : ';
	echo $passw;
	echo '<br/> db : ';
	echo $login['password'];
	echo '<br/> username : ';
	echo $username;
}

?>