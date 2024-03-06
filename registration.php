<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('config.php');

if(isset(filter_input_array(INPUT_POST)["submit"])) {
    $fname = filter_input_array(INPUT_POST)["fname"];
    $lname = filter_input_array(INPUT_POST)["lname"];
    $email = filter_input_array(INPUT_POST)["email"];
    $password = filter_input_array(INPUT_POST)["password"];
    $password_confirmation = filter_input_array(INPUT_POST)["password_confirmation"];
    $duplicate= mysqli_query($conn, "SELECT * FROM tb_lab4 WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Email is Already Taken.'); </script>";
    }
    else {
        if($password == $password_confirmation) {
           $query = "INSERT INTO tb_lab4 VALUES(NULL,'$fname', '$lname','$email','$password','$password_confirmation')" ;
           mysqli_query($conn, $query);
           echo
           "<script> alert('Registration Successful'); </script>";
        }
        else {
            echo
            "<script> alert('Password Does Not Match.');</script>";
        }
    }
}
?>

<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="https://classless.de/classless.css">
    </head>
    <body>
        <h2>Register Now</h2>
        
        <form class="" action="" method="post" autocomplete="off">
            <div>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname">
            </div>
            <div>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
        
        <p>Already have an account?<a href="login.php"> Log In</a></p>
    </body>
    
</html>