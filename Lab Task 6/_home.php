<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
</html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <?php
        include('./header.php');
         
           /* 
           if($_SESSION['status']=='Pending')
            {
                echo "<div class='wrn'>Please Wait While Our Admin Verify Your Documents</div>";
                
            }*/
        ?>

        <div >
        
<div style="text-align: center;">
        <?php 
            
                echo isset($_SESSION['id']) ? "<h2>Welcome ".$_SESSION['uname']." <a href='./Controller/logout.php' style='color: #FF6700;'></a></h2>" : "";
        ?>
        </div>

            <a href="accDetails.php">
                <div class="card">
                    Account Details
                </div>
            </a>


            <a href="editAddressInfo.php">
                <div class="card">
                    Change Address
                </div>
            </a>
            <a href="editPersonalInfo.php">
                <div class="card">
                    Change Personal Information
                </div>
            </a>

            <a href="passwordchange.php">
                <div class="card">
                    Change Password
                </div>
            </a>
            
        </div>
    </body>
</html>
