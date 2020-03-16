<!DOCTYPE html>
<?php
require('config.php');

	//bug checken op basis van id
	
	$TableName = "reports";

	if(!empty($_GET['id'])){
		$id = htmlentities($_GET['id']);
		$bug = "SELECT * FROM " . $TableName ." WHERE id = ".$id;

		$sql = $bug;
		if (mysqli_query($conn, $sql)) {
		} else {
			echo "Error: " . $sql . "<br />" . mysqli_error($conn);
		}
		$result = mysqli_query($conn, $bug);
		$row = mysqli_fetch_assoc($result);
	}
?>
<html>
	<head>
		<title>Opdr 3.3</title>
	</head>
	<body>
		<form action="UpdateSubmit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $row['ID']; ?>" />
			<input type="text" name="product_name" placeholder="Product name" value="<?php echo $row["product_name"]; ?>" />
			<input type="number" name="version" placeholder="Version" value="<?php echo $row['version']; ?>" />
			<input type="text" name="hardware" placeholder="Hardware" value="<?php echo $row['hardware']; ?>" />
			<input type="text" name="os" placeholder="OS" value="<?php echo $row['os']; ?>" />
			<input type="number" name="frequency" placeholder="Frequency / day" value="<?php echo $row['frequency'] ?>" />
			<input type="text" name="solution" placeholder="Solution" value="<?php echo $row['solution']; ?>" />
			<input type="submit" name="submit" value="Submit" />
		</form>
		<p><a href="index.php">Back to home</a></p>
	</body>
</html>