<?php
echo "<a href='zodiac_feedback.html'>Home</a>";

if(isset($_POST['submit'])) {
	require("inc_connect.php");

	$db_table = "zodiacfeedback";

	$date = date("Y-m-d");
	$time = date("h:i:s");
	$sender = $_POST['sender'];
	$message = $_POST['message'];
	$public = $_POST['public'];

	$query = "INSERT INTO " . $db_table . " (message_date, message_time, sender, message, public_message) VALUES (?, ?, ?, ?, ?)";

	echo $date;
	echo "<br />";
	echo $time;
	echo "<br />";
	echo $sender;
	echo "<br />";
	echo $message;
	echo "<br />";
	echo $public;
	echo "<br />";
	echo $query;
	echo "<br />";
	echo "<br />";

	if ($stmt = mysqli_prepare($DBConnect, $query)) {
		mysqli_stmt_bind_param($stmt, 'sssss', $date, $time, $sender, $message, $public);

		if (mysqli_stmt_execute($stmt)) {
			echo "Query executed";
		} else {
			echo "Error executing query";
			die(mysqli_error($DBConnect));
		}
		echo "<br /><br />--------------------<br /><br />";
	} else {
		echo "Error with prepare: <br />";
		die(mysqli_error($DBConnect));
	}

	mysqli_stmt_close($stmt);
	mysqli_close($DBConnect);
} else {
	echo "You must fill in the form.";
}
?>