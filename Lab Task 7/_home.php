


<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="./css/stylesheet2.css">
     <link rel="stylesheet" type="text/css" href="./css/stylesheet1.css">
</head>
<body>
    <table cellspacing="40">

        
            <h1  style="text-align: center; color: black;"> Online Auction System</h1><br>
<style>
   h1{
        font-size:40px ;
    }

body {
  
  
   background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
     background-color: #89ABE3FF;
}

</style>
</head>
<body>
    <nav>
  <div class="navicon">
    <div></div>
  </div>

  <a class="active" href="./_home.php">Home</a>
  <a href="accDetails.php">Account Details</a>
  <a href="editAddressInfo.php">Change Address</a>
  <a href="editPersonalInfo.php">Change Personal Information</a>
  <a href="passwordchange.php">Change Password</a>
  <a href="./Controller/logout.php">Log Out</a>

</nav>
        
<div style="text-align: center;">
        <?php 
            
                echo isset($_SESSION['id']) ? "<h2>Welcome ".$_SESSION['uname']."</h2>" : "";
        ?>
        </div>


<footer>
            <div class="container">
                <div class="left section">
                    <h2>About Us</h2>
                    <div class="content">
                        <p></p><br><br>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                    </div>
                </div>

                <div class="center section">
                    <h2>Contact Us</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text"> Dhaka, Bangladesh</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text"> 13213123131231</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text"> contact@example.com</span>
                        </div>
                    </div>
                </div>

                <div class="right section">
                    <h2>Quick Links</h2>
                    <div class="content">
                    
                    </div>
                    <a href="aiub.edu">AIUB</a>
                </div>
            </div>

            <div class="footer-bottom">
                <center>
                    <div><span>Powered By <a href="#">© 2021 | All Rights Reserved | Made By Online Auction System Team</a></span></div>
                </center>
            </div>
        </footer>
</body>
</html>

</body>

</html>






