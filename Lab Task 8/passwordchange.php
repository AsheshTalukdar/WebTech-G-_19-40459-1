<?php
    require './Controller/passwordChange.php'; 
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
        

        <div>
            <form method="POST">
                    <h2 style="color: black;"> Password Change</h2>
                    <table>
                        <tr>
                            <td style="color: black;" align="left"><b style="color: black;">Edit Password</b></td>
                        </tr>
                        <tr>
                            <td style="color: black;" align="left">Previous Password</td>
                            <td>:<input onfocusout="checkOP(this)" type="password" name="prev_password" value="<?php echo $prev_password ?>"></td>
                            <td style="color: black;"><?php echo $prev_password_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="op_err"></td>
                        </tr>
                        <tr>
                            <td style="color: black;" align="left">New Password</td>
                            <td>:<input onfocusout="checkP(this)" type="password" id="p" name="password1" value="<?php echo $password1 ?>"></td>
                            <td><?php echo $password1_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="p_err"></td>
                        </tr>
                        <tr>
                            <td  style="color: black;" align="left">Confirm new Password</td>
                            <td>:<input onfocusout="checkP2(this)" type="password" name="password2" value="<?php echo $password2 ?>"></td>
                            <td><?php echo $password2_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="p2_err"></td>
                        </tr>
                        <tr>
                            <td>
                            <input class="btn" id="btn" name="sub" type="submit" value="Change">
                            </td>
                        </tr>
                    </table>
            </form>
        </div>
</body>
</html>

</body>

</html>

