<?php
	Class Post
	{
		private $table;

		public function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function get_table($table)
		{
			$this->table = $table;
		}

		public function get_post_data()
		{
			$post_data = json_decode(file_get_contents("php://input"));

			return $post_data;
		}

		public function select_category($set_param)
		{
			if ($this->table == 'bevolkingsontwikkeling') 
			{
				$Periode = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->Periode;
				$BevolkingAanHetBeginVanDePeriode = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->BevolkingAanHetBeginVanDePeriode;
				$Overledenen = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->Overledenen;
				$Immigratie = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->Immigratie;
				$EmigratieInclusiefAdministratieveC = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->EmigratieInclusiefAdministratieveC;
				$TotaleBevolkingsgroei = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->TotaleBevolkingsgroei; 
				$BevolkingAanHetEindVanDePeriode = $this->get_post_data()->bevolkingsontwikkeling->data_per_jaar[0]->BevolkingAanHetEindVanDePeriode;

				// echo $table;
				$sql = "UPDATE " .$this->table. "SET 
				(
					Periode,
					BevolkingAanHetBeginVanDePeriode,
					Overledenen,
					Immigratie,
					EmigratieInclusiefAdministratieveC,
					TotaleBevolkingsgroei,
					BevolkingAanHetEindVanDePeriode
				) 
				WHERE Periode = ".$set_param."
				VALUES (?,?,?,?,?,?,?)";

				$keys = "iiiiiii";

				$Periode  = htmlspecialchars(strip_tags($Periode));
	            $BevolkingAanHetBeginVanDePeriode  = htmlspecialchars(strip_tags($BevolkingAanHetBeginVanDePeriode));
	            $Overledenen  = htmlspecialchars(strip_tags($Overledenen));
	            $Immigratie  = htmlspecialchars(strip_tags($Immigratie));
	            $EmigratieInclusiefAdministratieveC  = htmlspecialchars(strip_tags($EmigratieInclusiefAdministratieveC));
	            $TotaleBevolkingsgroei  = htmlspecialchars(strip_tags($TotaleBevolkingsgroei));
	            $BevolkingAanHetEindVanDePeriode  = htmlspecialchars(strip_tags($BevolkingAanHetEindVanDePeriode));
	            $set_param  = htmlspecialchars(strip_tags($set_param));

				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param(
					$keys,
					$Periode,
					$BevolkingAanHetBeginVanDePeriode,
					$Overledenen,
					$Immigratie,
					$EmigratieInclusiefAdministratieveC,
					$TotaleBevolkingsgroei,
					$BevolkingAanHetEindVanDePeriode,
					$set_param
				);

			}
			if ($this->table == 'bevolking_kerncijfers') 
			{
				$Periode = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->Periode;
				$Mannen = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->Mannen;
				$Vrouwen = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->Vrouwen;
				$TotaleBevolking = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->TotaleBevolking;
				$GroeneDruk = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->GroeneDruk;
				$GrijzeDruk = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->GrijzeDruk; 
				$Mannen_gem_leeftijd = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->Mannen_gem_leeftijd;
				$Vrouwen_gem_leeftijd = $this->get_post_data()->bevolking_kerncijfers->data_per_jaar[0]->Vrouwen_gem_leeftijd;

				// echo $table;
				$sql = "INSERT INTO " .$this->table. " 
				(
					Periode,
					Mannen,
					Vrouwen,
					TotaleBevolking,
					GroeneDruk,
					GrijzeDruk,
					Mannen_gem_leeftijd,
					Vrouwen_gem_leeftijd
				) 
				VALUES (?,?,?,?,?,?,?,?)";

				$keys = "iiiidddd";

				$Periode  = htmlspecialchars(strip_tags($Periode));
	            $Mannen  = htmlspecialchars(strip_tags($Mannen));
	            $Vrouwen  = htmlspecialchars(strip_tags($Vrouwen));
	            $TotaleBevolking  = htmlspecialchars(strip_tags($TotaleBevolking));
	            $GroeneDruk  = htmlspecialchars(strip_tags($GroeneDruk));
	            $GrijzeDruk  = htmlspecialchars(strip_tags($GrijzeDruk));
	            $Mannen_gem_leeftijd  = htmlspecialchars(strip_tags($Mannen_gem_leeftijd));
	            $Vrouwen_gem_leeftijd  = htmlspecialchars(strip_tags($Vrouwen_gem_leeftijd));

				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param(
					$keys,
					$Periode,
					$Mannen,
					$Vrouwen,
					$TotaleBevolking,
					$GroeneDruk,
					$GrijzeDruk,
					$Mannen_gem_leeftijd,
					$Vrouwen_gem_leeftijd
				);
			}

			if ($this->table == 'overheidsfinancien') 
			{
				$Periode = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->Periode;
				$Overheidsinkomsten = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->Overheidsinkomsten;
				$Overheidsuitgaven = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->Overheidsuitgaven;
				$Overheidssaldo = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->Overheidssaldo;
				$OverheidsschuldEMU = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->OverheidsschuldEMU;
				$CollectieveLasten = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->CollectieveLasten;
				$Overheidsconsumptie = $this->get_post_data()->overheidsfinancien->data_per_jaar[0]->Overheidsconsumptie;

				// echo $table;
				$sql = "INSERT INTO " .$this->table. " 
				(
					Periode,
					Overheidsinkomsten,
					Overheidsuitgaven,
					Overheidssaldo,
					OverheidsschuldEMU,
					CollectieveLasten,
					Overheidsconsumptie
				) 
				VALUES (?,?,?,?,?,?,?)";

				$keys = "iiiiiii";

				$Periode  = htmlspecialchars(strip_tags($Periode));
	            $Overheidsinkomsten  = htmlspecialchars(strip_tags($Overheidsinkomsten));
	            $Overheidssaldo  = htmlspecialchars(strip_tags($Overheidssaldo));
	            $OverheidsschuldEMU  = htmlspecialchars(strip_tags($OverheidsschuldEMU));
	            $CollectieveLasten  = htmlspecialchars(strip_tags($CollectieveLasten));
	            $Overheidsconsumptie  = htmlspecialchars(strip_tags($Overheidsconsumptie));

				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param(
					$keys,
					$Periode,
					$Overheidsinkomsten,
					$Overheidsuitgaven,
					$Overheidssaldo,
					$OverheidsschuldEMU,
					$CollectieveLasten,
					$Overheidsconsumptie
				);
			}

			return $stmt;
		}


		public function update()
		{
			$stmt = $this->select_category();
			if ($stmt->execute()) 
			{
				return true;
			}
			else
			{
				return false;
			}
			$stmt->close();
		}
	}
?>