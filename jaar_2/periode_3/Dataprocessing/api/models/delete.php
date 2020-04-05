<?php
	class Delete
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
		
		public function delete($del_param)
		{
			// die(var_dump($del_param));
			$sql = "DELETE FROM $this->table WHERE Periode = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $del_param);
			$stmt->execute();
			$result = $stmt->get_result();
			return $result;
		}
	}
?>