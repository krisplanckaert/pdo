<?php
ini_set('display_errors', 1);
require_once 'includes/User.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User(); // maakt connectie met de db
    $result = $user->login($_POST['login'], $_POST['wachtwoord']);
}

?>

<html>
    <head>
        <title>Inloggen</title>
    </head>
    <body>
        <form method="post" action="#">
            <input type="text" name="login" />
            <input type="password" name="wachtwoord" />
            <input type="submit" value="Inloggen" />
        </form>
    </body>
</html>