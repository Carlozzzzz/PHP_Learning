<?php include 'includes/person.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Delete Objects</title>
</head>
<body>
    <?php
        $person1 = new Person("Carlos");
        echo $person1->getName();
        unset($person1);
        
        echo "<br>The error will appear below.";
        echo $person1;

    ?>
</body>
</html>