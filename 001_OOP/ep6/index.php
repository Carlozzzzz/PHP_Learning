<?php include 'includes/person.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Constructors and Destructors</title>
</head>
<body>
    <?php
        $person1 = new Person("Carlos", "Brown", 22);
        
        echo $person1->displayInfo();

    ?>
</body>
</html>