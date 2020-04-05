<?php
	//headers
	header('Acces-Control-Allow-Origin: *');
	header('Content-Type: text/xml');
	include_once '../../config/db.php';
	include_once '../../models/get.php';

	if (isset($_GET)) 
	{
		//een database wordt aangemaakt
		$database = new DB();
		$db = $database->Connect();

		// een get object wordt gmaakt
		$Get = new Get($db);

		// check parameters for displaying data
		$table = $subject;
		$Get->get_table($table);
		$read_method = $Get->read_all();
		if (isset($_GET['year'])) {
			$year = $_GET['year'];
			$read_method = $Get->read_single($year);
		}
		$result = $read_method;
		
		if ($result->num_rows > 0)
		{
			$fetch = $result->fetch_all(MYSQLI_ASSOC);

			function to_xml(SimpleXMLElement $object, array $data, $table)
		    {
				switch ($table) 
				{
				    case 'overheidsfinancien':
				        $child = "overheidsfinancien_record";
				        break;
				    case 'bevolkingsontwikkeling':
				         $child = "bevolkingsontwikkeling_record";
				        break;
				    case 'bevolking_kerncijfers':
				         $child = "bevolking_kerncijfers_record";
				        break;
			        default:
			        	echo "dit kan niet";
				}
		        foreach ($data as $record) 
		        {
		            $new_object = $object->addChild(substr($child, 0));
		            foreach ($record as $key => $value) 
		            {
		                $key = strtolower($key); // zorg ervoor dat er geen hoofdletters zijn in de key
	                    if (count($record) > 2)  
	                    {
	                        if ($key == (int) $key) 
	                        {
	                            $key = "$key";
	                        }
	                        $new_object->addChild($key, $value);
	                    } 
	                    else 
	                    {
	                        $new_object[0] = $value;
	                    }
		            }
		        }
		    }
		   
		    $xml = new SimpleXMLElement('<' . $table . '/>'); // maak een nieuw xml object aan met de naam van de megegeven table
		    // print $xml;
		    $converter = to_xml($xml, $fetch, $table); // met de opgehaalde data vult het systeem de xml
		    $xml_string = $xml->asXML(); // maakt van het xml object een string
		    print $xml_string; // geef de xml weer als string
			
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