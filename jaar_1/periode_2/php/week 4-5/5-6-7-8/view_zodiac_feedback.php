<!DOCTYPE html>
<html>
<head>
	<title>Opdr. 8</title>
</head>
<body>
	<p>
		<a href="zodiac_feedback.html">Home</a>
	</p>
	<?php
	require("inc_connect.php");

	$db_table = "zodiacfeedback";

	$query = "SELECT * FROM " . $db_table;

	if ($stmt = mysqli_prepare($DBConnect, $query)) {
		if (mysqli_stmt_execute($stmt)) {
			echo "Query Executed";
		} else {
			echo "Error executing query";
			echo "<br /><br />--------------------<br /><br />";
			die(mysqli_error($DBConnect));
		}
	} else {
		die(mysqli_error($DBConnect));
	}

	mysqli_stmt_bind_result($stmt, $date, $time, $sender, $message, $public);
	mysqli_stmt_store_result($stmt);
	
	//if (mysqli_stmt_num_rows($stmt) > 0 && $public == "Y") {
	if (mysqli_stmt_num_rows($stmt) > 0) {
		echo "<table width=100%' border='1'>
		<tr>
		<th>Date</th>
		<th>Time</th>
		<th>Sender</th>
		<th>Message</th>
		</tr>";
		while (mysqli_stmt_fetch($stmt)) {
			if ($public == "Y") {
				echo "<tr>";
				echo "<td>" . $date . "</td>
				<td>" . $time . "</td>
				<td>" . $sender . "</td>
				<td>" . $message . "</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	} else {
		echo "<pre>";
		print_r($stmt);
		echo "</pre>";
		echo "<br />";
		echo "No entries found.";
	}

	mysqli_stmt_close($stmt);
	mysqli_close($DBConnect);
	?>
</body>
</html>