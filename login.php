<!DOCTYPE html>
<?php
session_start();
session_unset();
include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['Username'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            $_SESSION['username'] = $username;
        echo "
            <script>
            window.location.href='welcome.php'
            </script>
        ";
        }
        else{
            echo '<script>
            window.location.href = "invalid.php";
            </script>';
        }
}