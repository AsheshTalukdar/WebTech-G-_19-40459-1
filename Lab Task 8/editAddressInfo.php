

<?php
    include('./Controller/editAddressInfo.php');
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
     color: black;
}
div1 {
    color: black;
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
        

<div1>
        <h2 style="color: black;">Edit Address Information</h2>
        <form action="" method="post">  
                <table align="center">
                    <tr>
                        <td style="color: black;">
                            Address Information:<br>
                        </td>
                        <td style="color: black;">
                            House <input onfocusout="checkH(this)" type="text" name="house" id="house" placeholder="House No" value="<?php echo $addr_house ?>"><br>
                            Road <input onfocusout="checkR(this)" type="text" name="road" id="road" placeholder="Road No" value="<?php echo $addr_road ?>"><br>
                            Block <input onfocusout="checkB(this)" type="text" name="block" id="block" placeholder="Block No" value="<?php echo $addr_block ?>"><br>
                        </td>
                        <td>
                            <?php echo $addr_error ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="house_err"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="road_err"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="block_err"></td>
                    </tr>
                    <tr>
                        <td style="color: black;">
                            Division:
                        </td>
                        <td style="color: black;">
                            <select name="division" id="division">
                                <option value="--Division--" disabled>--Division--</option>
                                <?php 
                                    foreach($divisions as $d)
                                    {
                                        echo "<option ", $division==$d?'SELECTED':'' ," value='$d'>$d</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: black;">
                            District:
                        </td>
                        <td style="color: black;">
                            <select name="district" id="district">
                                <option value="--district--" disabled>--District--</option>
                                <?php 
                                    foreach($districts as $d)
                                    {
                                        echo "<option ", $district==$d?'SELECTED':'' ," value='$d'>$d</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="color: black;">Phone Number</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone ?>"></td>
                        <td><?php echo $phone_error ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="phone_err"></td>
                    </tr>
                    <tr>
                        <td style="color: black;">Date of Birth:</td>
                        <td style="color: black;">
                            <span style="color: black;">Day</span>
                            <select name="day" id="day">
                                    <?php for($i=1;$i<=31;$i++){ echo "<option value=$i ",$birth_day==$i?'selected':'',">$i</option>"; } ?>
                            </select> 
                            <span style="color: black;">Month</span>
                            <select name="month" id="month">
                                    <?php for($i=1;$i<=12;$i++){ echo "<option value=$i ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
                            </select> <br>
                            <span style="color: black;">Year</span>
                            <select name="year" id="year">
                                    <?php for($i=1990;$i<=2008;$i++){ echo "<option value=$i ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="color: black;">Gender</td>
                        <td>
                            <input type="radio" name="gender" id="gender" value="male" <?php echo $gender=='male'?"checked":'' ?> >
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" id="gender" value="female" <?php echo $gender=='female'?"checked":'' ?> >
                            <label for="gender">Female</label>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="sub2" class="btn" name="update" type="submit" value="Update"></td>
                        <td></td>
                    </tr>
                </table>
        </form>
    </div1>


</body>
</html>

</body>

</html>
















