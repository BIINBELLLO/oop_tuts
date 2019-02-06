<?php
	class NewClass {
		//Properties and Methods Goes Here!!!
		public $data = "This is the first information";

		public function __construct(){
			echo "This Class Starts Here!";
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
