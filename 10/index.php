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
    <title>OOP</title>
</head>
<body>
    <?php
    $person = new Person10();

    try {
        $person->setName('Zeina');
        echo $person->getName() . '<br/>';
        $person->setName(4);
        echo $person->getName() . '<br/>';
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>
</html>
