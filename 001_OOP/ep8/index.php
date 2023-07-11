<?php include 'includes/person.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Static</title>
</head>
<body>
    <?php
        // Display for variables
        echo Person::$drinkingAge . "<br>";
        Person::setDrinkingAge(18);
        echo Person::$drinkingAge;

        // Display for methods
        echo "<br>";
        $person1 = new Person("Carlos", "Brown", 22);
        echo $person1->getDrinkingAge();

    ?>
</body>
</html>