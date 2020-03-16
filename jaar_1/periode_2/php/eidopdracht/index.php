<?php
	include "db.php";
	include 'includes/header.php';
	include 'includes/navbar.php';
	if(isset($_SESSION["loggedin"])){
	    include 'includes/loggedin_content.php';
	} else{
		include 'includes/notloggedin_content.php';
	}
	include 'includes/footer.php';
?>