<?php // require 'config.php';
//if (!empty($_SESSION["id"])) {
  //  $id = $_SESSION["id"];
    //$result = mysqli_query($conn, "SELECT * FROM tb_lab4 WHERE id = $id");
    //$row = mysqli_fetch_assoc($result);
//} else {
  //  header("Location: index.php");
//}
//?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UoI Housing</title>
        <link rel="stylesheet" href="https://classless.de/classless.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <div class="top">
            <div class="row">
                <div class="col">
                    <a href="index.php" class="button">HOME</a>
                </div>
                <div class="col">
                    <a href="about.php" class="button">ABOUT</a>
                </div>
                <div class="col">
                    <a href="login.php" class="button">LOG IN</a>
                </div>
                <div class="col">
                    <a href="registration.php" class="button">REGISTER</a>
                </div>
                
            </div>
        </div>
        
        <header class="bgimg" <img src="images\dorm.webp" alt="alt"/>
            
        </header>
<!--        <div class="page">
            
        </div>
        <div class="about">
            
        </div>
        <div class="bottom">
            
        </div>-->
    </body>
</html>
