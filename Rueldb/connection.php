<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database =  'shoedb';

$conn = mysqli_connect($host,$username,$password,$database);
if ($conn)
		echo "Connected Successfully";


?>	