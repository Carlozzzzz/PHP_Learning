<?php require_once('includes/person.inc.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Inheritance</title>
</head>
<body>
    <?php
        $pet01 = new Pet();

        echo $pet01->owner();

    ?>
</body>
</html>