<?php
	class Db_Connect {

		private $servername;
		private $username;
		private $password;
		private $dbname;

		protected function connect() {
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->dbname = "oop_tuts";

			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			return $conn;
		}
		
	}

?>