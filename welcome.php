<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Proov1</title>
        <link rel="stylesheet" type="text/css" href="welcome.css">
    </head>
    <body>
        <div class="mainbox">
            <h1>You have successfully logged in! </h1>
            <p>You can now explore around!</p>
            <a href="index.php">Sign out</a>
        </div>
    </body>
</html>