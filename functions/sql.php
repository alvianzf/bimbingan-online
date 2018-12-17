<?php

function showdata($tbname)
{
	$sql = mysql_query("SELECT * FROM $tbname");
	$qry = mysql_fetch_array($sql);
	return $qry;
}

function fetchdata($tbname, $criteria, $value)
{
	$sql = mysql_query("SELECT * FROM $tbname WHERE $criteria = $value");
	$qry = mysql_fetch_array($sql);
	return $qry;
}

function fetchlike($tbname, $criteria, $value)
{
	$sql = mysql_query("SELECT * FROM $tbname WHERE $criteria LIKE '%$value%'");
	$qry = mysql_fetch_array($sql);

	return $qry;
}

function fetchspecial($tbname, $criteria, $value, $selected)
{
	$sql = mysql_query("SELECT * FROM $tbname WHERE $criteria = $value");
	$qry = mysql_fetch_array($sql);

	return $qry['$selected'];
}

function delete($tbname, $id)
{
	$sql = mysql_query("DELETE FROM $tbname WHERE Id = $id");
}

?>