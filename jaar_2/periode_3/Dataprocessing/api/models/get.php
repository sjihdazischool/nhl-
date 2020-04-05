<?php
	class Get
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
		
		public function read_all()
		{
			$sql = "SELECT * FROM $this->table";
            $stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();
			return $result;
		}

		public function read_single($year)
		{
			$sql = "SELECT * FROM $this->table WHERE `Periode` = ?";
            $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("i", $periode_value);
			$periode_value = $year;
			$stmt->execute();
			$result = $stmt->get_result();
			return $result;
		}
	}
?>