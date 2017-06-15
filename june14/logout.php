<?php
	session_start();
	// session_unset('password');
	session_unset();
	
	echo $_SESSION['username'] . " is logged out successfully";
	session_destroy();
?>