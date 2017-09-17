<?php
ob_start();
session_start();

$link=mysql_connect("localhost","tchtix","kgec@2013tekfest");

mysql_select_db("tchtix_register",$link);




?>