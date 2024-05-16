<?php 
/** 
* menggunakan mysqli_connect untuk koneksi database 
*/ 

$databaseHost = 'localhost'; 
$databaseName = 'simrs'; 
$databaseUsername = 'root'; 
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); ?>