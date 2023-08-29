<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ebookstore";


$con = mysqli_connect("$host", "$username", "$password", "$database");
mysqli_set_charset($con, 'utf8');

if(!$con){
	die(mysqli_connect_errno($con));
}else{
}




?>