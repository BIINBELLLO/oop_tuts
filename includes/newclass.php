<?php
	class NewClass {
		//Properties and Methods Goes Here!!!
		public $data = "This is the first information";

		public function setNewData($newData){
			$this->data = $newData;
		}

		public function getProperty(){
			return $this->data;
		}
	}

$object = new NewClass;
?>
