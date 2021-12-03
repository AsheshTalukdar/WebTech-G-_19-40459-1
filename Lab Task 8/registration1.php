



<?php 
	include('./Controller/registration1.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>  
        function validateform(){  
        var uname=document.myform.uname.value;  
        var f_name=document.myform.f_name.value;
        var l_name=document.myform.l_name.value;
        var email=document.myform.email.value;
        var pass=document.myform.pass.value;
        var pass2=document.myform.pass2.value;  
          
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
          return false;  
        }
		 else if (pass==null || pass==""){  
          alert("Password can't be blank");  
          return false;  
        }
		 else if(pass.length<6){  
          alert("Password must be at least 6 characters long.");  
          return false;  
          } 

		 else if (pass2==null || pass2==""){  
          alert("Confirm Password can't be blank");  
          return false;  
        }
        }
 
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
            
        }
        function checkPass() {
            if (document.getElementById("pass").value == "") {
                document.getElementById("passErr").innerHTML = "<span style='color: black;'>Password can't be blank</span>";
                document.getElementById("pass").style.borderColor = "red";
            }else{
                document.getElementById("passErr").innerHTML = "";
                document.getElementById("pass").style.borderColor = "green";

            }
            
        }

        function checkPass2(){
            if (document.getElementById("pass2").value == "") {
                document.getElementById("pass2Err").innerHTML = "<span style='color: black;'>Confirm Password can't be blank</span>";
                document.getElementById("pass2").style.borderColor = "red";
            }else{
                document.getElementById("pass2Err").innerHTML = "";
                document.getElementById("pass2").style.borderColor = "green";
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
#footer{
    position: fixed;
    padding: 10px 10px 0px 10px;
    bottom: 0;
    width: 100%;
    height: 40px;

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


	
		
		<div class="progress">
			<h3>
				<span style="color: #000000;">Step 1 > </span>
				<span>Step 2 > </span>
				<span>Step 3 </span>

			</h3>
		</div>
		<div >
			<form name="myform" method="post" action="" onsubmit="validateform()">
                
				<h2 style="color:black;">Personal Info</h2>
				<table align="center">
					<tr>
						<td style="color: black;">Username:</td>
						<td><input type="text" name="user_name"  placeholder="Username" id="uname" value="<?php echo $user_name ?>" onblur="checkUname()" onkeyup="checkUname()"></td>
						<td><p id="unameErr"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $user_name_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="uname_err"></td>
					</tr>
					<tr>
						<td style="color: black;">First Name:</td>
						<td><input type="text" name="first_name" placeholder="First Name" id="f_name" value="<?php echo $first_name ?>" onblur="checkFname()" onkeyup="checkFname()"></td>
						<td><p id="fnameErr"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $first_name_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="f_name_err"></td>
					</tr>
					<tr>
						<td style="color: black;">Last Name:</td>
						<td><input  type="text" name="last_name" placeholder="Last Name" id="l_name" value="<?php echo $last_name ?>" onblur="checkLname()" onkeyup="checkLname()"></td>

						<td><p id="lnameErr"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $last_name_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="l_name_err"></td>
					</tr>
					<tr>
						<td style="color: black;">Email:</td>
						<td><input type="text" name="email" placeholder="Email" id="email" value="<?php echo $email ?>" onblur="checkEmail()" onkeyup="checkEmail()"></td>
						<td><p id="emailErr"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $email_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="e_err"></td>
					</tr>
					<tr>
						<td style="color: black;">Password:</td>
						<td><input type="password" name="password1" id="pass" placeholder="Password" value="<?php echo $password1 ?>" onblur="checkPass()" onkeyup="checkPass()"></td>
						<td><p id="passErr"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $password1_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="p_err"></td>
					</tr>
					<tr>
						<td style="color: black;">Confirm Password:</td>
						<td><input type="password" name="password2" id="pass2" placeholder="Confirm Password" value="<?php echo $password2 ?>" onblur="checkPass2()" onkeyup="checkPass2()"></td>
						<td><p id="pass2Err"></p></td></tr><br>
						<td><span style="color: red;"><?php echo $password2_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="p2_err"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" id="sub1" name="reg1" type="submit" value="Next"></td>
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





