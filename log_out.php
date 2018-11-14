<?php
	session_start();

	if(isset($_GET['logout'])) {
    session_destroy();
	clearstatcache();
	
	header('location: login.php');
	}

	

	
?>