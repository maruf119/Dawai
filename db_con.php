<?php
$hostname = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'medicine';

$conn = mysqli_connect($hostname,$username, $pass,$dbname ) or die ('failed');
mysqli_select_db($conn, $dbname);
?>