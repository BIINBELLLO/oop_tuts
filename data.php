<?php
	include 'includes/db_connect.inc.php';
	include 'includes/user.inc.php';
	include 'includes/viewuser.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database Tuts</title>
</head>
<body>
<?php
	$user = new ViewUser;
	$user->showAllUsers();
?>




























</body>
</html>