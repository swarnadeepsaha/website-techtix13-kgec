<?php 
ob_start();
session_start();
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'tchtix_register';
$units=5;
function connect(){
	$host="localhost";
 $uname="xxx";
 $pass="abc123";
 $rating_dbname        = 'xxx';

$con = mysql_connect("localhost","tchtix","kgec@2013tekfest");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("tchtix_register",$con);}


?>