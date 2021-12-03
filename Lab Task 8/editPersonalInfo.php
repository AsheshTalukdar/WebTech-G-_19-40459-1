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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script> 

function validateform(){  
        var uname=document.myform.uname.value;  
        var f_name=document.myform.f_name.value;
        var l_name=document.myform.l_name.value;
        var email=document.myform.email.value;
  
        if (uname==null || uname==""){  
          alert("Username can't be blank");  
          return false;  
        }
        else if(uname.length<5){  
          alert("Username must have 5 characters.");  
          return false;  
          } 
        else if (f_name==null || f_name==""){  
          alert("First Name can't be blank");  
          return false;  
        }
        else if (l_name==null || l_name==""){  
          alert("Last Name can't be blank");  
          return false;  
        }
         else if (email==null || email==""){  
          alert("Email can't be blank");  
          return false;  }}

function checkUname() {
            if (document.getElementById("uname").value == "") {
                document.getElementById("unameErr").innerHTML = "<span style='color: black;'>User Name can't be blank</span>";
                document.getElementById("uname").style.borderColor = "red";
            }else{
                document.getElementById("unameErr").innerHTML = "";
                document.getElementById("uname").style.borderColor = "green";

            }
            
        }
        function checkFname() {
            if (document.getElementById("f_name").value == "") {
                document.getElementById("fnameErr").innerHTML = "<span style='color: black;'>First Name can't be blank</span>";
                document.getElementById("f_name").style.borderColor = "red";
            }else{
                document.getElementById("fnameErr").innerHTML = "";
                document.getElementById("f_name").style.borderColor = "green";

            }
            
        }
        function checkLname() {
            if (document.getElementById("l_name").value == "") {
                document.getElementById("lnameErr").innerHTML = "<span style='color: black;'>Last Name can't be blank</span>";
                document.getElementById("l_name").style.borderColor = "red";
            }else{
                document.getElementById("lnameErr").innerHTML = "";
                document.getElementById("l_name").style.borderColor = "green";

            }
            
        }
        function checkEmail() {
            if (document.getElementById("email").value == "") {
                document.getElementById("emailErr").innerHTML = "<span style='color: black;'>Email can't be blank</span>";
                document.getElementById("email").style.borderColor = "red";
            }else{
                document.getElementById("emailErr").innerHTML = "";
                document.getElementById("email").style.borderColor = "green";

            }
        </script>
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
        <form name="myform" action="" method="post" onsubmit="validateform()">  
                <table align="center">

                                        <tr>
                        <td style="color: black;">Username</td>
                        <td style="color: black;"><input type="text" name="username" id="uname" placeholder="user name" value="<?php echo $username ?>"
                            onblur="checkUname()" onkeyup="checkUname()"></td>
                        <td><p id="unameErr"></p></td></tr><br>
                        <td style="color: red;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td style="color: black;">First Name</td>
                        <td style="color: black;"><input  type="text" name="fname" id="f_name" placeholder="first name" value="<?php echo $fname ?>"onblur="checkFname()" onkeyup="checkFname()"></td>
                        <td><p id="fnameErr"></p></td></tr><br>
                        <td style="color: red;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td style="color: black;">Last name</td>
                        <td style="color: black;"><input type="text" name="lname" id="l_name" placeholder="last name" value="<?php echo $lname ?>" onblur="checkLname()" onkeyup="checkLname()"></td>

                        <td><p id="lnameErr"></p></td></tr><br>
                        <td style="color: red;"><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>

                    
                    <tr>
                        <td style="color: black;">Email</td>
                        <td style="color: black;"><input onfocusout="checkP(this)" type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $email ?>"onblur="checkEmail()" onkeyup="checkEmail()"></td>
                        <td><p id="emailErr"></p></td></tr><br>
                        <td style="color: red;"><?php echo $email_error ?></td>
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











