<?php 
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Auto Load Class</title>
</head>
<body>
    <?php
        $person = new Person\Person("Carlos", "Red", 22);
        $home = new Home("Bigain", "Pulo");

        echo $person->displayInfo();
        echo $home->displayInfo();
    ?>
</body>
</html>