<?php
	class NewClass {
		//Properties and Methods Goes Here!!!
		public $data = "This is the first information";
		public $error = "This is the class called ".__CLASS__."!";

		public function __construct(){
			echo "This Class Starts Here!";
		}

		public function __toString() {
			echo "toString Method:";
			return $this->error;
		}

		public function setNewData($newData){
			$this->data = $newData;
		}

		public function getProperty(){
			return $this->data;
		}

		public function __destruct(){
			echo "This Class Ends Here!";
		}
	}
?>
