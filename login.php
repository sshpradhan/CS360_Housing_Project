<?php
require 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset(filter_input_array(INPUT_POST)["submit"])) {
    $email = filter_input_array(INPUT_POST)["email"];
    $password = filter_input_array(INPUT_POST)["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_lab4 WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0) {
        if($password == $row["password"]) {
            session_start();
            
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard.php");
            
            exit();
        }
        else {
            echo
            "<script>alert('Wrong Password');</script>";
        }
    }
    else {
        echo
        "<script> alert('User Not Registered');</script>";
    }
}

?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <link rel="stylesheet" href="https://classless.de/classless.css">
    </head>
    
    <body>
        <h2>Log In</h2>
        
        <form class="" action="" method="post" autocomplete="off">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        <button type="submit" name="submit">Log In</button>
        </form>
        
        <p>Don't have an account yet?<a href="registration.php"> Register</a></p>
    </body>
</html>