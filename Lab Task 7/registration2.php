



<?php 
	include('./Controller/registration2.php');
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
                document.getElementById("unameErr").innerHTML = "User Name can't be blank";
                document.getElementById("uname").style.borderColor = "red";
            }else{
                document.getElementById("unameErr").innerHTML = "";
                document.getElementById("uname").style.borderColor = "green";

            }
            
        }
        function checkFname() {
            if (document.getElementById("f_name").value == "") {
                document.getElementById("fnameErr").innerHTML = "First Name can't be blank";
                document.getElementById("f_name").style.borderColor = "red";
            }else{
                document.getElementById("fnameErr").innerHTML = "";
                document.getElementById("f_name").style.borderColor = "green";

            }
            
        }
        function checkLname() {
            if (document.getElementById("l_name").value == "") {
                document.getElementById("lnameErr").innerHTML = "Last Name can't be blank";
                document.getElementById("l_name").style.borderColor = "red";
            }else{
                document.getElementById("lnameErr").innerHTML = "";
                document.getElementById("l_name").style.borderColor = "green";

            }
            
        }
        function checkEmail() {
            if (document.getElementById("email").value == "") {
                document.getElementById("emailErr").innerHTML = "Email can't be blank";
                document.getElementById("email").style.borderColor = "red";
            }else{
                document.getElementById("emailErr").innerHTML = "";
                document.getElementById("email").style.borderColor = "green";

            }
            
        }
        function checkPass() {
            if (document.getElementById("pass").value == "") {
                document.getElementById("passErr").innerHTML = "Password can't be blank";
                document.getElementById("pass").style.borderColor = "red";
            }else{
                document.getElementById("passErr").innerHTML = "";
                document.getElementById("pass").style.borderColor = "green";

            }
            
        }

        function checkPass2(){
            if (document.getElementById("pass2").value == "") {
                document.getElementById("pass2Err").innerHTML = "Confirm Password can't be blank";
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
			<span style="color: #00FF0A;">Step 1 > </span>
			<span style="color: #000000;">Step 2 > </span>
			<span>Step 3  </span>

		</h3>
	</div>
		<div class="form_container">
			<form name="myform" method="post" action="" onsubmit="validateform()">
				<table align="center">
					<tr>
						<h2 style="color:black;">Address Information:</h2><br>
						
					</tr>
					<tr>
						<td style="color: black;">&nbsp; House No.:</td>
						<td><input type="text" name="house" placeholder="House No." id="house" value="<?php echo $house ?>"></td>
						<td><?php echo $house_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="house_err"></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp; Road No.:</td>
						<td><input  type="text" name="road" placeholder="Road No." id="road" value="<?php echo $road ?>"></td>
						<td><?php echo $road_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="road_err"></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp; Block No.:</td>
						<td><input o type="text" name="block" placeholder="Block No." id="block" value="<?php echo $block ?>"></td>
						<td><?php echo $block_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="block_err"></td>
					</tr>
					<tr>
					<td style="color: black;"><br>&nbsp;&nbsp;Division:</td>
					<td><br><select name="division" id="division">
								<option value="--Division--" selected disabled>--Division--</option>
								<?php 
									foreach($divisions as $d)
									{
										echo "<option value='$d'>$d</option>";
									}
								?>
							</select>
					</td>
					<td><?php  ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp;&nbsp;District:</td>
						<td><select name="district" id="district">
								<option value="--district--" selected disabled>--District--</option>
								<?php 
									foreach($districts as $d)
									{
										echo "<option value='$d'>$d</option>";
									}
								?>
							</select>
						</td>
						<td><?php echo $district_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp;&nbsp;Gender:</td>
						<td style="color: black;"><input type="radio" name="gender" value="male" <?php echo $gender=='male'?"checked":'' ?>>Male<input type="radio" name="gender" value="female" <?php echo $gender=='female'?"checked":'' ?>>Female</td>
						<td><?php echo $gender_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp;&nbsp;Date of Birth:</td>
						<td style="color: black;">
							<?php echo $birth_day; ?>
							<span style="color: black;">Day</span>
							<select name="day" id="day">
									<?php for($i=1;$i<=31;$i++){ echo "<option value='$i' ", $birth_day==$i?'selected':'',">$i</option>"; } ?>
							</select> 
							<span style="color: black;">Month</span>
							<select name="month" id="month">
									<?php for($i=1;$i<=12;$i++){ echo "<option value='$i' ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
							</select> <br>
							<span style="color: black;">Year</span>
							<select name="year" id="year">
									<?php for($i=1990;$i<=2008;$i++){ echo "<option value='$i' ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp;&nbsp;Phone Number:</td>
						<td><input type="text" name="phone" placeholder="Phone Number" id="phone" value="<?php echo $phone ?>"></td>
						<td><?php echo $phone_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="phone_err"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" name="reg2" id="sub2" type="submit" value="Next"></td>
						<td></td>
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















