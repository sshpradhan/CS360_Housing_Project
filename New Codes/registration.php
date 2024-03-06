<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('config.php');

if (isset(filter_input_array(INPUT_POST)["submit"])) {
    $fname = filter_input_array(INPUT_POST)["fname"];
    $lname = filter_input_array(INPUT_POST)["lname"];
    $email = filter_input_array(INPUT_POST)["email"];
    $password = filter_input_array(INPUT_POST)["password"];
    $password_confirmation = filter_input_array(INPUT_POST)["password_confirmation"];
    $role = filter_input_array(INPUT_POST)["role"];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    $deleted_at = date('Y-m-d H:i:s');
    $duplicate = mysqli_query($conn, "SELECT * FROM student_login WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Email is Already Taken.'); </script>";
    } else {
        if ($password == $password_confirmation) {
            $query = "INSERT INTO student_login VALUES(NULL,'$fname', '$lname','$email','$password','$password_confirmation', '$role', '$created_at', '$updated_at' ,'$deleted_at')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        } else {
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
            <div class="dropdown">
                <label for="role">
                    Role:
                    <select name="role" id="role">
                        <option value="" selected="selected">Select a role</option>
                    </select>
                    <br><br>
                </label>
                <!--<input type="text" id="role" name="role">-->
            </div>
            <button type="submit" name="submit">Register</button>
        </form>

        <p>Already have an account?<a href="login.php"> Log In</a></p>
    </body>
    
    <footer class="w3-container w3-theme-d5">
                <p>&copy; 2024 Housing Site. All rights reserved.</p>
            </footer>
    <script>
        var roleObject = {
            "Student": {
//                "HTML": ["Links", "Images", "Tables", "Lists"],
//                "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
//                "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]
            },
            "UI Agent": {
//                "PHP": ["Variables", "Strings", "Arrays"],
//                "SQL": ["SELECT", "UPDATE", "DELETE"]
            },
            "Rental Property":  {
//                "Hill":["a","b"],
//                "Palouse":["c"]
            }
        }
        window.onload = function () {
            var roleSel = document.getElementById("role");
            var topicSel = document.getElementById("topic");
            var chapterSel = document.getElementById("chapter");
            for (var x in roleObject) {
                roleSel.options[roleSel.options.length] = new Option(x, x, x);
            }
            roleSel.onchange = function () {
                    //empty Chapters- and Topics- dropdowns
                    chapterSel.length = 1;
                    topicSel.length = 1;
                //display correct values
                for (var y in roleObject[this.value]) {
                    topicSel.options[topicSel.options.length] = new Option(y, y, y);
                }
            }
            topicSel.onchange = function () {
                    //empty Chapters dropdown
                    chapterSel.length = 1;
                //display correct values
                var z = roleObject[roleSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i], z[i]);
                }
            }
        }
    </script>
</html>