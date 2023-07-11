<?php include 'includes/class-autoload.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Sample Project</title>
</head>
<body>
    <h1>This is Episode 16</h1>
    <?php 

        /**
         * Viewing data
         */
        $testObj = new UsersView();
        $testObj->showUser("Carlos");

        /**
         * Insert data
         */
        $contrObj = new UsersContr();
        $contrObj->createUser("Carlos2", "Maralit2", "2000-08-05");
    ?>
</body>
</html>