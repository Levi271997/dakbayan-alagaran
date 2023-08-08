<?php 
// this access is for local
// $servername = "localhost";
// $username 	= "root";
// $password 	= "";
// $dbname 	= "ryanlao_db_da";


//this access is for live
$servername = "localhost";
$username 	= "ryanlao_db_da";
$password 	= "DA2022!";
$dbname 	= "ryanlao_db_da";

// Create connection
// Check connection
$dbc = mysqli_connect($servername, $username, $password, $dbname) or die ("Bad connect:.mysqli_connect_error()");

?>