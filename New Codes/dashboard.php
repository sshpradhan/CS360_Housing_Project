<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM student_login WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>

<!--<!DOCTYPE html>
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
-->
<!DOCTYPE html>
<html>
    <!DOCTYPE html>
    <html>
        <head>
            <title>User Dashboard</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

            <link rel="stylesheet" href="styles.css">

        </head>

        <body>

            <!-- Navbar -->
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

            <!-- Page Container -->
            <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
                <!-- The Grid -->
                <div class="w3-row">
                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container">
                                <h4 class="w3-center"><?php echo $row["fname"] . ' ' . $row["lname"]; ?></h4>
                                <p class="w3-center"><img src="images/women.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                                <hr>
                                <!--After building a proper database, we can have it echoed through php-->
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Sophomore, Architecture</p>
                                <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Dublin, Ireland</p>
                                <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> 24 June, 2004</p>
                            </div>
                        </div>
                        <br>

                        <!-- Accordion -->
                        <div class="w3-card w3-round">
                            <div class="w3-white">
                                <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Saved Properties</button>
                                <div id="Demo1" class="w3-hide w3-container">
                                    <button class="w3-button w3-block w3-theme-l4">Hill Rentals</button>
                                    <button class="w3-button w3-block w3-theme-l4">Hill Rentals</button>
                                    <button class="w3-button w3-block w3-theme-l4">Hill Rentals</button>
                                </div>
                                <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Pending Applications</button>
                                <div id="Demo2" class="w3-hide w3-container">
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
                                </div>
                                <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> New Listings</button>
                                <div id="Demo3" class="w3-hide w3-container">
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
                                    <button class="w3-button w3-block w3-theme-l4">palouse</button>
<!--                                    <div class="w3-row-padding">
                                        <br>
                                        <div class="w3-half">
                                            <img src="images/women.png" style="width:100%" class="w3-margin-bottom">
                                        </div>
                                    </div>-->
                                </div>
                            </div>      
                        </div>
                        <br>

                        <!-- Interests --> 
                        <div class="w3-card w3-round w3-white w3-hide-small">
                            <div class="w3-container">
                                <p>Interests</p>
                                <p>
                                    <!--After building a proper database, we can have it echoed through php-->  
                                    <span class="w3-tag w3-small w3-theme-d5">Music</span>
                                    <span class="w3-tag w3-small w3-theme-d2">Games</span>
                                    <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                                    <span class="w3-tag w3-small w3-theme-l2">Food</span>
                                    <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                                    <span class="w3-tag w3-small w3-theme-l4">Volleyball</span>
                                    <span class="w3-tag w3-small w3-theme-l4">Travel</span>
                                    <span class="w3-tag w3-small w3-theme-l4">Dogs</span>
                                </p>
                            </div>
                        </div>
                        <br>

                        <!-- Alert Box -->
                        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                            <span onclick="this.parentElement.style.display = 'none'" class="w3-button w3-theme-l3 w3-display-topright">
                                <i class="fa fa-remove"></i>
                            </span>
                            <p><strong>BIO</strong></p>
                            <p>You can add a short bio about yourself for the rental properties to see.</p>
                        </div>

                        <!-- End Left Column -->
                    </div>

                    <!-- Middle Column -->
                    <div class="w3-col m7">

                        <div class="w3-row-padding">
                            <div class="w3-col m12">
                                <div class="w3-card w3-round w3-white">
                                    <div class="w3-container w3-padding">
                                        <h6 class="w3-opacity">
                                            <strong>Welcome to your Dashboard !</strong>
                                            <br> 
                                            Hope you have some matches today so you can find your perfect apartment.
                                        </h6>
                                        <!--<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>-->
                                        <!--<button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        
                        <div class="w3-row-padding">
                            <div class="w3-col m12">
                                <div class="w3-card w3-round w3-white">
                                    <div class="w3-container w3-padding">
                                        <h1 class="w3-opacity"><strong>You currently have no matches.</h1>
                                        <!--<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>-->
                                        <!--<button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>--> 
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <img src="images/women.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                            <span class="w3-right w3-opacity">1 min</span>
                            <h4>John Doe</h4><br>
                            <hr class="w3-clear">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="w3-row-padding" style="margin:0 -16px">
                                <div class="w3-half">
                                    <img src="images/women.png" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="images/women.png" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                </div>
                            </div>
                            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
                            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
                        </div>

                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <img src="images/women.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                            <span class="w3-right w3-opacity">16 min</span>
                            <h4>Jane Doe</h4><br>
                            <hr class="w3-clear">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
                            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
                        </div>  

                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <img src="images/women.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                            <span class="w3-right w3-opacity">32 min</span>
                            <h4>Angie Jane</h4><br>
                            <hr class="w3-clear">
                            <p>Have you seen this?</p>
                            <img src="images/women.png" style="width:100%" class="w3-margin-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
                            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
                        </div> -->

                        <!-- End Middle Column -->
                    </div>

                    <!-- Right Column -->
                    <div class="w3-col m2">
                        <div class="w3-card w3-round w3-white w3-center">
                            <div class="w3-container">
                                <h5>Best Possible Apartments:</h5>
                                <!--<img src="images/women.png" alt="Forest" style="width:100%;">-->
                                <p><button class="w3-button w3-block w3-theme-l4"><strong>Hill Rentals</strong></button></p>
                                <p>Address of HRA</p>
                                <p><button class="w3-button w3-block w3-theme-l4"><strong>Palouse Properties</strong></button></p>
                                <p>Address of PP</p>
                                <p><button class="w3-button w3-block w3-theme-l4"><strong>Grove</strong></button></p>
                                <p>Address of grove</p>
                                <p><button class="w3-button w3-block w3-theme-l4">Show More</button></p>
                            </div>
                        </div>
                        <br>

<!--                        <div class="w3-card w3-round w3-white w3-center">
                            <div class="w3-container">
                                <p>Friend Request</p>
                                <img src="images/women.png" alt="Avatar" style="width:50%"><br>
                                <span>Jane Doe</span>
                                <div class="w3-row w3-opacity">
                                    <div class="w3-half">
                                        <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                                    </div>
                                    <div class="w3-half">
                                        <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>-->

                        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                            <p>ADS</p>
                        </div>
                        <br>
                        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                            <p>ADS</p>
                        </div>
                        <br>
                        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
                            <p>ADS</p>
                        </div>
                        <br>

                        <!-- End Right Column -->
                    </div>

                    <!-- End Grid -->
                </div>

                <!-- End Page Container -->
            </div>
            <br>

            <!-- Footer -->
            <footer class="w3-container w3-theme-d5">
                <p>&copy; 2024 Housing Site. All rights reserved.</p>
            </footer>

            <script>
            // Accordion
                function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                        x.previousElementSibling.className += " w3-theme-d1";
                    } else {
                        x.className = x.className.replace("w3-show", "");
                        x.previousElementSibling.className =
                                x.previousElementSibling.className.replace(" w3-theme-d1", "");
                    }
                }

            // Used to toggle the menu on smaller screens when clicking on the menu button
                function openNav() {
                    var x = document.getElementById("navDemo");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
            </script>

        </body>
    </html> 


</body>
</html>
