<!DOCTYPE html>
<?php
require('config.php');
?>
<html>
	<head>
		<title>Opdr 3.3</title>
	</head>
	<body>
		<form action="CreateBugReport.php" method="POST">
			<input type="text" name="product_name" placeholder="Product name" />
			<input type="number" name="version" placeholder="Version" />
			<input type="text" name="hardware" placeholder="Hardware" />
			<input type="text" name="os" placeholder="OS" />
			<input type="number" name="frequency" placeholder="Frequency / day" />
			<input type="text" name="solution" placeholder="Solution" />
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
		if (empty($_POST['product_name']) || empty($_POST['version']) || empty($_POST['hardware']) || empty($_POST['os']) || empty($_POST['frequency']) || empty($_POST['solution'])) {
			echo "<p>You must fill in every input field.</p>";
		} else {
			//INSERT data from database---
			$product_name = htmlentities($_POST["product_name"]);
			$version = htmlentities($_POST["version"]);
			$hardware = htmlentities($_POST["hardware"]);
			$os = htmlentities($_POST["os"]);
			$frequency = htmlentities($_POST["frequency"]);
			$solution = htmlentities($_POST["solution"]);

			$TableName = "reports";
			$sql = "INSERT INTO ". $TableName ." (product_name, version, hardware, os, frequency, solution) VALUES('$product_name', '$version', '$hardware', '$os', '$frequency', '$solution')";

			if (mysqli_query($conn, $sql)) {
				echo "New record created succesfully.";
			} else {
				echo "Error: " . $sql . "<br />" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		?>

		<p><a href="index.php">Back to home</a></p>
	</body>
</html>