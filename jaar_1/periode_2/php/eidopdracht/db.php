<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "nhlstenden_twitter";
	$conn = mysqli_connect($servername, $username, $password, $databasename);

	if(!$conn) {
		die ('Connection failed: ' . mysqli_connect_error());
	}
?>