<?php
require 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset(filter_input_array(INPUT_POST)["submit"])) {
    $email = filter_input_array(INPUT_POST)["email"];
    $password = filter_input_array(INPUT_POST)["password"];
    $result = mysqli_query($conn, "SELECT * FROM student_login WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            session_start();

            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard.php");

            exit();
        } else {
            echo
            "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo
        "<script> alert('User Not Registered');</script>";
    }
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>UoI Housing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

        <link rel="stylesheet" href="styles.css">

    </head>
    <body>

         <!--Links (sit on top)--> 
        <div class="w3-top">
            <div class="w3-row w3-padding w3-black" style="text-align: center;">
                
            <a href="index.php" class="w3-text-white" 
                  style="font-size:90px; font-family: 'Chalkduster',fantasy; text-decoration: none;">
                <strong> UoI Housing</strong>
            </a>
       
            </div>
        </div>

        <!-- Header with image -->
        <header class="bgimg w3-display-container w3-grayscale-min" id="home">
            <div class="text-block">
                <h1> LOG IN</h1>
                <form class="" action="" method="post" autocomplete="off">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div><br><br>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div><br><br>
                    <button type="submit" name="submit">Log In</button>
                </form>

                <p>Don't have an account yet?<a href="registration.php"> Register</a></p>      
            </div> 
        </header>

        <!-- Add a background color and large text to the whole page -->
        <div class="w3-sand w3-grayscale w3-large">


            <!-- Footer -->
            <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
                <p>&copy; 2024 Housing Site. All rights reserved.</p>
            </footer>

            <script>
                // Tabbed Menu
                function openMenu(evt, menuName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("menu");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                    }
                    document.getElementById(menuName).style.display = "block";
                    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
                }
                document.getElementById("myLink").click();
            </script>

    </body>

</html>

