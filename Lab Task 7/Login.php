





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script>  
        function validateform(){  
        var name=document.myform.name.value;  
        var password=document.myform.password.value;  
          
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        else if(password== null || password==""){  
          alert("Password can't be blank.");  
          return false;  
          }  


        else if(password.length<6){  
          alert("Password must be at least 6 characters long.");  
          return false;  
          }  
        }
 
        function checkName() {
            if (document.getElementById("name").value == "") {
                document.getElementById("nameErr").innerHTML ="<span style='color: black;'> Name can't be blank</span>";
                document.getElementById("name").style.borderColor = "red";

            }else{
                document.getElementById("nameErr").innerHTML = "";
                document.getElementById("name").style.borderColor = "green";

            }
            
        }
        function checkPass(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passErr").innerHTML = "<span style='color: black;'>Password can't be blank</span>";
                document.getElementById("password").style.borderColor = "red";
            }else{
                document.getElementById("passErr").innerHTML = "";
                document.getElementById("password").style.borderColor = "green";
            }
        }
</script>  
</head>
<body>
    <table cellspacing="40">

        
            <h1  style="text-align: center; color: #000000;"> Online Auction System</h1><br>
<style>
   h1{
        font-size:40px ;
    }

body {
  background-image: url("icon1.jpg");
  
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
     background-size: cover;
     background-color: #D3D3D3;
}ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}li a:hover {
  background-color: #111;
}.active {
  background-color: #04AA6D;
}

div1{
    color: black;
    text-align: center;
    font-size: 40px;
    height: 890px;
    width: 400px;
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

<ul>
 <li><a class="active" href="./index.php">Home</a></li>
  <li><a class="active" href="./Login.php">Log In</a></li>
  <li><a class="active" href="./Registration1.php">Sign Up</a></li>
</ul>


        <div class="form_container">
            <form name="myform" method="post" action="" onsubmit="validateform()">
                <h2 style="color: black; text-align: left; font-size: 40px;">Login</h2><br>
                <table align="center">
                    <tr>
                        <td style="color: black;">Username:</td>
                        <td><input type="text" name="username" id="name" onblur="checkName()" onkeyup="checkName()"></td>
                        <td><p id="nameErr"></p></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="uname_err"></td>
                        
                    </tr>
                    <tr>
                        <td style="color: black;">Password:</td>
                        <td><input  type="text" id="password" name="password" onblur="checkPass()" onkeyup="checkPass()"></td>
                        <td><p id="passErr"></p></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="p_err"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td ><input class="btn" type="submit" name="login" id="login" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>    

 
<?php
    include('footer.php');
?>
</body>
</html>

</body>

</html>