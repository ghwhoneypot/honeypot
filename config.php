<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$mysqli = mysqli_connect(getenv('HOST'), getenv('USERNAME'), getenv('PASSWORD'), getenv('DATABASE'));
 
?>
