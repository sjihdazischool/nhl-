<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../../config/db.php';
	include_once '../../models/post.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') 
	{
		//een database wordt aangemaakt
		$database = new DB();
		$db = $database->Connect();

		$Post = new Post($db);
		$Post->get_table($_GET['subject']);
		$Post->select_category();
		$Post->create();
	}
	else
	{
		echo "ERROR 405: voer een put request in";
	}
?>