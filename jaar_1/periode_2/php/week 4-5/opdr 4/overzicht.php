<?php
// Step #1: Open a connection to MySQL...
$conn = mysqli_connect("localhost", "root", "root", "airline_surveys");

// And test the connection
if(!$conn)
{
    DIE("Could not connect: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Opdr. 4</title>
</head>
<body>
	<p>
		<a href="index.php">Terug naar hoofdpagina</a>
	</p>

    <?php
	// Step #3: Create the query
	$query = "SELECT * FROM survey";

	if ($stmt = mysqli_prepare($conn, $query)) {

		if (mysqli_stmt_execute($stmt)) {
			echo "Query executed";
		} else {
			echo "Error executing query";
			echo "<br /><br />--------------<br /><br />";
			die(mysqli_error($conn));
		}
	} else {
		die(mysqli_error($conn));
	}

	mysqli_stmt_bind_result($stmt, $id, $date, $flightID, $friendliness, $space, $comfort, $cleanliness, $noise);
	mysqli_stmt_store_result($stmt);

	if (mysqli_stmt_num_rows($stmt) > 0) {
		echo "<table width='100%' border='1'>
		<tr>
		<th>Date</th>
		<th>FlightID</th>
		<th>Friendliness</th>
		<th>Space</th>
		<th>Comfort</th>
		<th>Cleanliness</th>
		<th>Noise</th>
		</tr>";
		while (mysqli_stmt_fetch($stmt)) {
			echo "<tr>";
			echo "<td>" . $date . "</td>
			<td>" . $flightID . "</td>
			<td>" . $friendliness . "</td>
			<td>" . $space . "</td>
			<td>" . $comfort . "</td>
			<td>" . $cleanliness . "</td>
			<td>" . $noise . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "<pre>";
		print_r($stmt);
		echo "</pre>";
		echo "<br />";
		echo $fname;
		echo "<br />";
		echo $ww;
		echo "<br />";
		echo $pc;
		echo "<br />";
		echo "No entries found.";
	}

	// Step #9: Close the statement and free memory
	mysqli_stmt_close($stmt);

	// Step #10: Close the connection!
	mysqli_close($conn);
    ?>
</body>
</html>