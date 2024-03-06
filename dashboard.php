<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_lab4 WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dash Board</title>
        <link rel="stylesheet" href="https://classless.de/classless.css">
    </head>
    <body>
        <h1>Welcome to your homepage <?php echo $row["fname"]; ?>!</h1>
        <a href="logout.php">Log Out</a><br>
        <a href="add_user.php"><button>Add a new user</button></a>
    </body>
</html>
