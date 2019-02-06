<?php
	// include('includes/newclass.php');
	include('includes/users.php');
	// $object = new NewClass;
	// $object_2 = new NewClass;
?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP Tuts</title>
</head>
<body>
<?php

	// $object->setNewData("This is the first user property");
	// unset($object);
	// echo $object->getProperty(). "<br>";
	// echo $object;
	// echo NewClass::staticMethod();
	// $object_2->setNewData("This is the second user property");
	// echo $object_2->getProperty(). "<br>";

	$user = new Users('Hassan' , 'Yusuf' , 'Black' , 'Brown' , 'Arabian');
	echo $user->fullName();



?>

<a href="calculator.php">Calculator App</a>
</body>
</html>