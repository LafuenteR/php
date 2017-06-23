<?php
require 'connection.php';
$sql = 'SELECT firstname, lastName FROM employees';

$result = mysqli_query ($conn,$sql);
// print_r ($result);

if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)){//converts sql/table to assoc array
	// print_r($r);
	extract($row);
	echo $firstname . ' ' . $lastName . '<br>';
	}
}

?>