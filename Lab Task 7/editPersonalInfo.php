<?php
    include('./Controller/editPersonalInfo.php');
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
     background-color:#89ABE3FF;
}


table{
    border-collapse: collapse;
    width: 100%;
}


.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
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
        

<div class="form_container">
        <h2 style="color: black;">Edit Personal Information</h2>
        <form action="" method="post">  
                <table align="center">

                                        <tr>
                        <td style="color: black;">Username</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="username" id="username" placeholder="username" value="<?php echo $username ?>"></td>
                        <td style="color: black;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td style="color: black;">First Name</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="fname" id="fname" placeholder="fname" value="<?php echo $fname ?>"></td>
                        <td style="color: black;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td style="color: black;">Last name</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="lname" id="lname" placeholder="lname" value="<?php echo $lname ?>"></td>
                        <td style="color: black;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>

                    
                    <tr>
                        <td style="color: black;">Email</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="email" id="email" placeholder="email" value="<?php echo $email ?>"></td>
                        <td style="color: black;"><?php echo $email_error ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="email_error"></td>
                    </tr>  <td></td>
                        <td ><input id="sub2" class="btn" name="update" type="submit" value="Update"></td>
                      
                    </tr>
                </table>
        </form>
    </div>

</body>
</html>

</body>

</html>











