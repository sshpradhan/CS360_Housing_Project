<?php
require 'config.php'; // Include your database connection file

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if user is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit();
}

// Retrieve list of registered users from the database
$sql = "SELECT * FROM student_login";
$result = mysqli_query($conn, $sql);

// Check if there are any users
if (mysqli_num_rows($result) > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>UoI Housing</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <div class="w3-top">
                <div class="w3-row w3-padding w3-black">
                    <div class="w3-col s3">
                        <a href="dashboard.php" class="w3-button w3-block w3-black">HOME</a>
                    </div>
                    <div class="w3-col s3">
                        <a href="profile.php" class="w3-button w3-block w3-black">PROFILE</a>
                    </div>
                    <div class="w3-col s3">
                        <a href="settings.php" class="w3-button w3-block w3-black">SETTINGS</a>
                    </div>
                    <div class="w3-col s3">
                        <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
                    </div>
                </div>
            </div>
            
           
            <?php
            // Loop through each row of the result set and display user data
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <header class="bgimg w3-display-container w3-grayscale-min" id="home">
                    <div class="text-block">
                        <h1> Personal Profile</h1>
                        Name : <?php echo $row['fname'] . ' ' . $row['lname']; ?><br>
                        Email Address: <?php echo $row['email']; ?><br><br>
                        <form action="settings.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Make Changes</button>
                        </form>
                        <br>
                        <form action="dashboard.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Back to Dashboard</button>
                        </form>
                    </div>
                </header>
            <header class="bgimg w3-display-container w3-grayscale-min" id="home">
                    <div class="text-block">
                        <h1> Housing Profile</h1>
            Number of Bedrooms: <?php echo $row['NofBeds']; ?><br>
                        Number of Bathroms: <?php echo $row['NofBathrooms']; ?><br>
                        <form action="settings.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Make Changes</button>
                        </form>
                        <form action="dashboard.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Back to Dashboard</button>
                        </form>
                    </div>
                </header>


                <?php
            } // end of while loop
            ?>
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
    <?php
} else {
    echo "No users found.";
}

// Close connection
mysqli_close($conn);
?>
