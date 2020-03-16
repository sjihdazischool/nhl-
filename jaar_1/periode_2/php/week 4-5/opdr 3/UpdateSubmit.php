<?php
	require('config.php');
	$TableName = "reports";
	
	if (empty($_POST['product_name']) || empty($_POST['version']) || empty($_POST['hardware']) || empty($_POST['os']) || empty($_POST['frequency']) || empty($_POST['solution'])) {
		echo "<p>You must fill in every input field.</p>";
	} else {
		//INSERT data from database---
		$ID = $_POST['id'];

		$product_name = htmlentities($_POST["product_name"]);
		$version = htmlentities($_POST["version"]);
		$hardware = htmlentities($_POST["hardware"]);
		$os = htmlentities($_POST["os"]);
		$frequency = htmlentities($_POST["frequency"]);
		$solution = htmlentities($_POST["solution"]);

		if ($stmt = $conn->prepare("UPDATE ". $TableName ." SET product_name=?, version=?, hardware=?, os=?, frequency=?, solution=? WHERE ID=?")) {
			$stmt->bind_param("sssssss", $product_name , $version , $hardware , $os , $frequency , $solution , $ID);
			$stmt->execute();
			echo "Record updated succesfully.";
			echo "<br><a href='index.php'>home</a>";
		}
		else {
			echo "Error: " . $sql . "<br />" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>