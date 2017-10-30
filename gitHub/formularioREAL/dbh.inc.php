<?php

$dbServername = "localhost";

$dbUsername = "root";
$dbPassword = "";
$dbName = "subidas";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//mysql_set_charset('utf8');
$result=mysqli_query($conn,'SET NAMES utf8');
 ?>
