<?php
declare(strict_types=1);
require_once 'includes/autoload.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>OOP Calculator</title>
</head>
<body>
	<form action="includes/calc.php" method="post">
		<p>My own calculator</p>
		<label for="num1"></label>
		<input type="number" name="num1" id="num1" placeholder="First Number">
		<label for="op"></label>
		<select name="operator" id="op">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="mul">Multiplication</option>
			<option value="div">Division</option>
		</select>
		<label for="num2"></label>
		<input type="number" name="num2" id="num2" placeholder="Second Number">
		<button type="submit" name="submit">Calculate</button>
	</form>
</body>
</html>
