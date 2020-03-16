<?php
// Step #1: Open a connection to MySQL...
$conn = mysqli_connect("localhost", "root", "root", "airline_surveys");

// And test the connection
if(!$conn)
{
    DIE("Could not connect: " . mysqli_error($conn));
} else {
	echo "Connected";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Opdr. 4</title>
</head>
<body>
	<form action="index.php" method="POST">
		<p>
			<input type="text" name="date" placeholder="Date and time of flight" />
		</p>
		<p>
			<input type="number" name="flightID" placeholder="Flight ID" />
		</p>

		<h2>Friendliness of customer staff:</h2>
		<p>
			<input type="radio" name="friendliness" value="No opinion" id="friendliness1" />
			<label for="friendliness1">No Opinion</label>
		</p>
		<p>
			<input type="radio" name="friendliness" value="Poor"  id="friendliness2" />
			<label for="friendliness2">Poor</label>
		</p>
		<p>
			<input type="radio" name="friendliness" value="Fair"  id="friendliness3" />
			<label for="friendliness3">Fair</label>
		</p>
		<p>
			<input type="radio" name="friendliness" value="Good"  id="friendliness4" />
			<label for="friendliness4">Good</label>
		</p>
		<p>
			<input type="radio" name="friendliness" value="Excellent"  id="friendliness5" />
			<label for="friendliness5">Excellent</label>
		</p>

		<h2>Space for luggage storage:</h2>
		<p>
			<input type="radio" name="space" value="No opinion" id="space1" />
			<label for="space1">No Opinion</label>
		</p>
		<p>
			<input type="radio" name="space" value="Poor"  id="space2" />
			<label for="space2">Poor</label>
		</p>
		<p>
			<input type="radio" name="space" value="Fair"  id="space3" />
			<label for="space3">Fair</label>
		</p>
		<p>
			<input type="radio" name="space" value="Good"  id="space4" />
			<label for="space4">Good</label>
		</p>
		<p>
			<input type="radio" name="space" value="Excellent"  id="space5" />
			<label for="space5">Excellent</label>
		</p>

		<h2>Comfort of seating:</h2>
		<p>
			<input type="radio" name="comfort" value="No opinion" id="comfort1" />
			<label for="comfort1">No Opinion</label>
		</p>
		<p>
			<input type="radio" name="comfort" value="Poor"  id="comfort2" />
			<label for="comfort2">Poor</label>
		</p>
		<p>
			<input type="radio" name="comfort" value="Fair"  id="comfort3" />
			<label for="comfort3">Fair</label>
		</p>
		<p>
			<input type="radio" name="comfort" value="Good"  id="comfort4" />
			<label for="comfort4">Good</label>
		</p>
		<p>
			<input type="radio" name="comfort" value="Excellent"  id="comfort5" />
			<label for="comfort5">Excellent</label>
		</p>

		<h2> Cleanliness of aircraft:</h2>
		<p>
			<input type="radio" name="cleanliness" value="No opinion" id="cleanliness1" />
			<label for="cleanliness1">No Opinion</label>
		</p>
		<p>
			<input type="radio" name="cleanliness" value="Poor"  id="cleanliness2" />
			<label for="cleanliness2">Poor</label>
		</p>
		<p>
			<input type="radio" name="cleanliness" value="Fair"  id="cleenliness3" />
			<label for="cleanliness3">Fair</label>
		</p>
		<p>
			<input type="radio" name="cleanliness" value="Good"  id="cleanliness4" />
			<label for="cleanliness4">Good</label>
		</p>
		<p>
			<input type="radio" name="cleanliness" value="Excellent"  id="cleanliness5" />
			<label for="cleanliness5">Excellent</label>
		</p>

		<h2> Noise level of aircraft:</h2>
		<p>
			<input type="radio" name="noise" value="No opinion" id="noise1" />
			<label for="noise1">No Opinion</label>
		</p>
		<p>
			<input type="radio" name="noise" value="Poor"  id="noise2" />
			<label for="noise2">Poor</label>
		</p>
		<p>
			<input type="radio" name="noise" value="Fair"  id="noise3" />
			<label for="noise3">Fair</label>
		</p>
		<p>
			<input type="radio" name="noise" value="Good"  id="noise4" />
			<label for="noise4">Good</label>
		</p>
		<p>
			<input type="radio" name="noise" value="Excellent"  id="noise5" />
			<label for="noise5">Excellent</label>
		</p>
		<input type="submit" name="submit" value="Submit" />
	</form>

    <?php
    if(isset($_POST['submit']))
    {
        $date = $_POST['date'];
        $flightID = $_POST['flightID'];
        $friendliness = $_POST['friendliness'];
        $space = $_POST['space'];
        $comfort = $_POST['comfort'];
        $cleanliness = $_POST['cleanliness'];
        $noise = $_POST['noise'];

        // Step #3: Create the query
    	$query = "INSERT INTO survey ('date', 'flightID', 'friendliness', 'space', 'comfort', 'cleanliness', 'noise') VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Step #4.1: Prepare query as a statement
        if($statement = mysqli_prepare($conn, $query))
        {
            // Step #4.2: Fill in the ? parameters!
            mysqli_stmt_bind_param($statement, 'sssssss', $date, $flightID, $friendliness, $space, $comfort, $cleanliness, $noise);

            //Step #5: Execute statement and check success
            if(mysqli_stmt_execute($statement)) {
                echo "Query executed";
            }
            else {
                echo "Error executing query";
                die(mysqli_error($conn));
            }
            echo"<br><br>--------------<br><br>";
        }
        else{
            die(mysqli_error($conn));
        }

        // Step #9: Close the statement and free memory
        mysqli_stmt_close($statement);

        // Step #10: Close the connection!
        mysqli_close($conn);
    }
    ?>
</body>
</html>