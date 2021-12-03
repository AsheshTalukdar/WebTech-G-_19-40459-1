



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
        var hn=document.myform.hn.value;  
        var rn=document.myform.rn.value;
        var bl=document.myform.bl.value;
        var div=document.myform.div.value;
        var dis=document.myform.dis.value;
        var gen=document.myform.gen.value; 
         var pn=document.myform.pn.value;  
          
        if (hn==null || hn==""){  
          alert("House number can't be blank");  
          return false;  
        }

        else if (rn==null || rn==""){  
          alert("Road Number can't be blank");  
          return false;  
        }
        else if (bl==null || bl==""){  
          alert("Block Number can't be blank");  
          return false;  
        }
		 else if (div==null || div==""){  
          alert("You must select One Division");  
          return false;  
        }
		 else if (dis==null || dis==""){  
          alert("You must Select One District");  
          return false;  
        }

		 else if (gen==null || gen==""){  
          alert("Must select one gender");  
          return false;  
        }
         else if (pn==null || pn==""){  
          alert("Phone number cannot be blank");  
          return false;  
        }
        }
 
        function checkhn() {
            if (document.getElementById("hn").value == "") {
                document.getElementById("hnErr").innerHTML = "<span style='color: black;'>House number can't be blank</span>";
                document.getElementById("hn").style.borderColor = "red";
            }else{
                document.getElementById("hnErr").innerHTML = "";
                document.getElementById("hn").style.borderColor = "green";

            }
            
        }
        function checkrn() {
            if (document.getElementById("rn").value == "") {
                document.getElementById("rnErr").innerHTML = "<span style='color: black;'>Road Number can't be blank</span>";
                document.getElementById("rn").style.borderColor = "red";
            }else{
                document.getElementById("rnErr").innerHTML = "";
                document.getElementById("rn").style.borderColor = "green";

            }
            
        }
        function checkbl() {
            if (document.getElementById("bl").value == "") {
                document.getElementById("blErr").innerHTML = "<span style='color: black;'>Block Number can't be blank</span>";
                document.getElementById("bl").style.borderColor = "red";
            }else{
                document.getElementById("blErr").innerHTML = "";
                document.getElementById("bl").style.borderColor = "green";

            }
            
        }
        function checkdiv() {
            if (document.getElementById("div").value == "") {
                document.getElementById("divErr").innerHTML = "<span style='color: black;'>You must select One Division</span>";
                document.getElementById("div").style.borderColor = "red";
            }else{
                document.getElementById("divErr").innerHTML = "";
                document.getElementById("div").style.borderColor = "green";

            }
            
        }
        function checkdis() {
            if (document.getElementById("dis").value == "") {
                document.getElementById("disErr").innerHTML = "<span style='color: black;'>You must Select One District</span>";
                document.getElementById("dis").style.borderColor = "red";
            }else{
                document.getElementById("disErr").innerHTML = "";
                document.getElementById("dis").style.borderColor = "green";

            }
            
        }

        function checkgen(){
            if (document.getElementById("gen").value == "") {
                document.getElementById("genErr").innerHTML = "<span style='color: black;'>You must select one gender</span>";
                document.getElementById("gen").style.borderColor = "red";
            }else{
                document.getElementById("genErr").innerHTML = "";
                document.getElementById("gen").style.borderColor = "green";
            }
        }
        function checkpn(){
            if (document.getElementById("pn").value == "") {
                document.getElementById("pnErr").innerHTML = "<span style='color: black;'>Phone number can't be blank</span>";
                document.getElementById("pn").style.borderColor = "red";
            }else{
                document.getElementById("pnErr").innerHTML = "";
                document.getElementById("pn").style.borderColor = "green";
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
						<td><input type="text" name="house" placeholder="House No." id="hn" value="<?php echo $house ?>" onblur="checkhn()" onkeyup="checkhn()"></td>
						<td><p id="hnErr"></p></td></tr>
						<br>
						<td><span style="color:red;"><?php echo $house_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="house_err"></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp; Road No.:</td>
						<td><input  type="text" name="road" placeholder="Road No." id="rn" value="<?php echo $road ?>"
								onblur="checkrn()" onkeyup="checkrn()"></td>
									<td><p id="rnErr"></p></td></tr>
									<br>
						<td><span style="color:red;"><?php echo $road_error ?></span></td>

					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="road_err"></td>
					</tr>
					<tr>
						<td style="color: black;">&nbsp; Block No.:</td>
						<td><input o type="text" name="block" placeholder="Block No." id="bl" value="<?php echo $block ?>"onblur="checkbl()" onkeyup="checkbl()"></td>
									<td><p id="blErr"></p></td></tr>
									<br>
						<td><span style="color:red;"><?php echo $block_error ?></span></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="block_err"></td>
					</tr>
					<tr>
					<td style="color: black;"><br>&nbsp;&nbsp;Division:</td>
					<td><br><select name="division" id="div">
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
						<td><select name="district" id="dis">
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
						<td style="color: black;"><input type="radio" name="gender" id="gen" value="male" <?php echo $gender=='male'?"checked":'' ?>>Male<input type="radio" name="gender" value="female" <?php echo $gender=='female'?"checked":'' ?>>Female</td>
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
						<td><input type="text" name="phone" placeholder="Phone Number" id="pn" value="<?php echo $phone ?>"onblur="checkpn()" onkeyup="checkpn()"></td>
									<td><p id="pnErr"></p></td></tr>
									</td>
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















