<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../config/db.php';
	include_once '../models/put.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') 
	{
		//een database wordt aangemaakt
		$database = new DB();
		$db = $database->Connect();

		$Put = new Put($db);
		$Put->get_table($subject);
		$Put->select_category();
		$Put->update();
	}
	else
	{
		echo "ERROR 405: voer een put request in";
	}
?>