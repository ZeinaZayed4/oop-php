# MVC

## The 3 Tasks PHP Does:
1. We query the database and connect to it.
2. We handle data submitted by users.
3. We show DB data to the users.

## Procedural vs. OOP
| Procedural                                                     | OOP                                                       |
|----------------------------------------------------------------|-----------------------------------------------------------|
| We do the 3 previous things in the same place inside the code. | We take these 3 tasks and split them into separate files. |
```php
<?php

// Get submitted data
$firstname = $_POST['first'];

// Query the database
$conn = mysqli_connect('localhost', 'root', '', 'database_name');
$sql = "SELECT * FROM names WHERE names_first = ?";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, "s", $firstname);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	
	// We show the data to the user
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['names_first'] . " & " . $row['names_last'];
	}
}
```

```php
<?php

// Link to classes
require 'model.inc.php';
require 'contr.inc.php';
require 'view.inc.php';

// Get submitted data
$firstname = $_POST['first'];

// Query the database
$objectContr = new Contr;
$names = $objectContr->getNames($firstname);

// Show the data to the user
$objectView = new View;
$objectView->showNames($names);
```

## Design Patterns - MVC Model

### Model
- All database staff is being handel by the model.

### Controller
1. The controller gets the input from the user, then does something to update the database or something by communicating with the model, if something has to be shown, the controller sends it to the view.
2. The controller gets the input from the user, then does something to update the database or something by communicating with the model; the view then communicates with the model to get the data to show them in the website.

### View
- Shows the data to the user.
