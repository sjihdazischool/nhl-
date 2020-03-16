<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Guest Book</title>
	</head>
	<body>
		<p><a href="ShowGuestBook.php">Show Guest Book</a></p>
		<h2>Enter your name to sign our guest book</h2>
		<form method="POST" action="SignGuestBook.php">
			<p>
				First Name 
				<input type="text" name="first_name"/>
			</p>
			<p>
				Last Name 
				<input type="text" name="last_name"/>
			</p>
			<p>
				<input type="submit" value="Submit" />
			</p>
		</form>
	</body>
</html>