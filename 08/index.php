<?php require_once 'includes/Person8.php'; ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>OOP</title>
</head>
<body>
	<?php
 
	Person8::setDrivingAge(16);
    $person = new Person8('Zeina', 'brown', 23);
	echo "Driving age is: " . $person->getDrivingAge() . '<br/>';
 
	?>
</body>
</html>
