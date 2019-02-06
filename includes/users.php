<?php
	// Users Class Starts here!!!
	class Users {
		//Properties Goes Here!!!
		public $first_name;
		public $last_name;
		public $hairColor;
		public $eyeColor;
		public $country;

		//Methods Goes Here!!!

		public function __construct($first_name, $last_name, $hairColor, $eyeColor, $country){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->hairColor = $hairColor;
			$this->eyeColor = $eyeColor;
			$this->country = $country;
		}

		public function fullName(){
			return $this->first_name." ".$this->last_name;
		}

		public function __destruct(){

		}
	}
?>