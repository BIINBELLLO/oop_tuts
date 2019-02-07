<?php
	class ViewUser extends User {

		public function showAllUsers() {
			$datas = $this->getAllUsers();

			foreach ($datas as $data) {
				echo $data['U_id']. "<br>";
				echo $data['Pswd']. "<br>";
			}
	}
}

?>