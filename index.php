<?php
	include('includes/newclass.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo $object->getProperty(). "<br>";

	$object->setNewData("This is the new property");

	echo $object->getProperty(). "<br>";

?>
</body>
</html>