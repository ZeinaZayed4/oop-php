<?php require_once 'includes/Person.php'; ?>

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
		$person1 = new Person('Zeina', 'brown', 23);
        echo $person1->getName() . '<br />';
	?>
</body>
</html>
