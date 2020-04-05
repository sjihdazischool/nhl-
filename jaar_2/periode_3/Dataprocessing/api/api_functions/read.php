<?php
	//headers
	header('Acces-Control-Allow-Origin: *');
	header('Content-Type: application/json');

	require_once '../../config/db.php';
	include_once '../../models/get.php';
	if ($_SERVER['REQUEST_METHOD'] == 'GET') 
	{
		//een database wordt aangemaakt
		$database = new DB();
		$db = $database->Connect();

		// een post object wordt gmaakt
		$Get = new Get($db);

		// check parameters for displaying data
		$table = htmlspecialchars(strip_tags($subject));
		$Get->get_table($table);
		$read_method = $Get->read_all();
		if (isset($_GET['year'])) 
		{
			$year = htmlspecialchars(strip_tags($_GET['year']));
			$read_method = $Get->read_single($year);
		}
		

		$result = $read_method;

		if ($result->num_rows > 0)
		{
			$period_counter = 0;
			$prev_period;

			$fetch = $result->fetch_all(MYSQLI_ASSOC);
			$std_res = new stdClass;
			$std_res->$table = new stdClass;

			for ($i=0; $i < $result->num_rows; $i++) 
			{ 
				if(isset($prev_period) == $fetch[$period_counter]['Periode'])
				{
					$period_counter++;
				}

				if (!isset($prev_period) OR $prev_period !== $fetch[$period_counter]['Periode']) 
				{
					$std_res->$table->data_per_jaar[$period_counter] = $data_arr = new stdClass;
				}

				foreach ($fetch[$period_counter] as $key => $value) 
				{
					if (gettype($value) != 'string') {
						$data_arr->$key = $fetch[$period_counter][$key];
					}
					else
					{
						$value = (int)$value;
						$data_arr->$key = $value;
					}
				}
				
				$prev_period = $fetch[$period_counter]['Periode'];
			}

			echo json_encode($std_res);
		}
		else
		{
			echo json_encode("oof");
		}
	}
	else
	{
		echo "ERROR 405: voer een get request in";
	}
?>