<?php 
header('Content-Type: text/html; charset=utf-8'); 
$servername = "localhost"; 
$username = "user_portal"; 
$password = "userpass"; 
$basename = "portal"; 

$dbc = mysqli_connect($servername, $username, $password, $basename, 3310) or die('Error connecting to MySQL server.'); 
mysqli_set_charset($dbc, "utf8"); 

//if ($dbc) { 
//echo "Connected successfully"; 
//}
?>
