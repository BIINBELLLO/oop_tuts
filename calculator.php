<?php

	include('includes/calc.inc.php');
	$result;
	if (isset($_POST['calculate'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$cal = $_POST['cal'];

	$calculator = new Calc($num1, $num2, $cal);
	$result = $calculator->calcMethod();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form action = "calculator.php" method = "POST">
	<input type="text" name="num1">
	<input type="text" name="num2">
	<select name = "cal">
		<option value="add">Add</option>
		<option value="sub">Subtract</option>
		<option value="mul">Multiply</option>
		<option value="div">Divide</option>
	</select>
	<button type="submit" name="calculate">Calculate</button><br>
	<h1><?=$result?></h1>
	
</form>
</body>
</html>