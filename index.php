<?php
	include('includes/newclass.php');
	$object = new NewClass;
	// $object_2 = new NewClass;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	// $object->setNewData("This is the first user property");
	// unset($object);
	// echo $object->getProperty(). "<br>";

	// echo $object;

	echo NewClass::staticMethod();



	// $object_2->setNewData("This is the second user property");

	// echo $object_2->getProperty(). "<br>";



?>
</body>
</html>