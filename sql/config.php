<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dummy';


$conn = mysqli_connect($hostname , $username, $password , $dbname);

if(!$conn){
	echo "error" .mysqli_error($conn);
}


?>