<?php
	require_once "db.php";

	class api
	{
		function select($select, $from)
		{
			$sql = "SELECT ".$select." FROM ".$from;
			$result = $conn->query($sql);
		}

		function update()
		{

		}

		function delete()
		{

		}

	}  
?>