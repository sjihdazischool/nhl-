<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../config/db.php';
	include_once '../models/delete.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') 
	{
		//een database wordt aangemaakt
		$database = new DB();
		$db = $database->Connect();

		$Delete = new Delete($db);
		$Delete->get_table($subject);
		$Delete->delete($_GET['delete']);
	}
	else
	{
		echo "ERROR 405: voer een delete request in";
	}
?>