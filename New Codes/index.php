<?php // require 'config.php';
//if (!empty($_SESSION["id"])) {
  //  $id = $_SESSION["id"];
    //$result = mysqli_query($conn, "SELECT * FROM student_login WHERE id = $id");
    //$row = mysqli_fetch_assoc($result);
//} else {
  //  header("Location: index.php");
//}
//?>

<!DOCTYPE html>
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

    <!-- Links (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <div class="w3-col s3">
                <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
            </div>
            <div class="w3-col s3">
                <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
            </div>
            <div class="w3-col s3">
                <a href="login.php" class="w3-button w3-block w3-black">LOG IN</a>
            </div>
            <div class="w3-col s3">
                <a href="registration.php" class="w3-button w3-block w3-black">REGISTER</a>
            </div>
        </div>
    </div>

    <!-- Header with image -->
    <header class="bgimg w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
            <span class="w3-tag">Made by Students, for the students</span>
        </div>
        <div class="w3-display-middle w3-center">
            <span class="w3-text-black" style="font-size:90px; font-family: 'Chalkduster',fantasy;"><strong> UoI<br>Housing</strong></span>
        </div>
        <div class="w3-display-bottomright w3-center w3-padding-large">
            <span class="w3-text-black">Moscow, Idaho</span>
        </div>
    </header>

    <!-- Add a background color and large text to the whole page -->
    <div class="w3-sand w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE PAGE</span></h5>
            <p>
                Creating a robust database system with user-centric features and seamless automation, 
                the platform aims to streamline the process of finding and renting accommodations for 
                students in Moscow, ID, ultimately enhancing their overall experience and satisfaction.
            </p>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>Lorem Ipsum</p>
            </div>
            <img src="images/Dorm.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
            <p><strong>Under Construction by:</strong> C. Jensen and S. Pradhan</p>
            <p><strong>Course:</strong> CS 360</p>
        </div>
    </div>

    <!-- End page content -->
    </div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>&copy; 2024 Housing Site. All rights reserved.</p>
</footer>


</body>
</html>
