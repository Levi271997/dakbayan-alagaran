<?php
session_start();
// $servername = "localhost";
// $username 	= "root";
// $password 	= "";
// $dbname 	= "ryanlao_db_da";

$servername = "localhost";
$username 	= "ryanlao_db_da";
$password 	= "DA2022!";
$dbname 	= "ryanlao_db_da";
$dbc = mysqli_connect($servername, $username, $password, $dbname) or die ("Bad connect:.mysqli_connect_error()");
?>