<?php use Person\Person9;

require_once 'includes/autoload.php' ?>

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
    
    $person = new Person\Person9('Zeina', 23);
    echo $person->getPerson();
    
    $house = new House('Main', 2);
    echo $house->getAddress();
	?>
</body>
</html>
