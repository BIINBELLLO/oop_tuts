<?php
	class NewClass {
		//Properties Goes Here!!!
		public $data = "This is the first information";
		public $error = "This is the class called ".__CLASS__."!";
		public static $static = 0;

		//Methods Goes Here!!!

		public function __construct(){
			echo "This Class Starts Here!";
		}

		public function __toString() {
			echo "toString Method:";
			return $this->error;
		}

		public static function staticMethod(){
			return self::$static + 1;
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
