<?php
session_start();
session_unset();
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Proov1</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div class="loginf">
            <h1>AUTHENTICATION</h1>
            <form name="Loginform" action="login.php" method="post" autocomplete="off">
                <label for="Username">Username: </label>
                <input type="text" id="Username" name="Username" autocomplete="false"><br><br>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                <br><br>
                <button type="submit" id="btn" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>