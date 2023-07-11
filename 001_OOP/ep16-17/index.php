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
        $testObj = new Test();
        $testObj->getUsersStmt("Carlos", "Maralit");

        $testObj->setUsersStmt("Chener", "Jiji", "2000-03-02");
    ?>
</body>
</html>