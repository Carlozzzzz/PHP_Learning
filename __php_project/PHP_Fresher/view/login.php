<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/homepage.css">

    <title>Login</title>
</head>
<body>
    <form action="../inc/login.inc.php" method="POST">
        <div>
            <label for="usernameTxt">Username:</label>
            <input type="text" id="usernameTxt" name="usernameTxt">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="passwordTxt" name="passwordTxt">
        </div>
        <div>
            <button type="submit">Login</button>
            <button>Register</button>
        </div>
    </form>
</body>
</html>