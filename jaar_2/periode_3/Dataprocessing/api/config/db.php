<?php
	class DB
	{
		/*
		* source https://www.w3schools.com/php/php_mysql_connect.asp
		*/
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $db = "dp1";

		public function Connect()
		{
			// Create connection
			$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);



			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			// echo "Connected successfully";

			return $conn;
		}
	}
?>