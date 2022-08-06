<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$host = 'localhost';
$database = 'admin';
$username = 'root';
$password = 'Ad87nm4guHB8sd';

$mysqli = mysqli_connect($host, $username, $password, $database);
 
?>
