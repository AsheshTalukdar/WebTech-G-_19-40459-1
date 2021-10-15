<?php

$currPass="admin#";

$newPass=$rePass="";
$err_npass=$err_rpass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
 if($_POST["currPass"]==$_POST["newPass"]){
 	$err_npass="Cannot be same as Current Password";
 }
 

 else if($_POST["newPass"]!=$_POST["rePass"]){
 	$err_rpass="Retyped Password MUST match with new Password";
 }
else{
 	$newPass=$_POST["newPass"];
 }
 }

?>





<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <?php include 'dashboard.php' ?>
  <?php include 'lower.php' ?>
	<fieldset style=" height: 200px;  width: 450px;margin: -400px auto;">
          	<legend><b>CHANGE PASSWORD</b></legend>
          	<table>
				<tr>
					<td><span>Current Password:</span></td>
					<td><input type="Password" name="currPass" value="abc@1234"></td>
				</tr>	
				<tr>
					
  				<td><span style="color:green;"><b>New Password:</b></span></td>  
  				<td><input type="Password" name="newPass">
  				<span class="error">*<?php echo $err_npass; ?> </span>
  				</td></tr>
  				<tr>
				<td><span style="color:red"><b>Retype New Password:</b></span></td>
				<td><input type="Password" name="rePass">
				<span class="error">*<?php echo $err_rpass; ?> </span>
			    </td>
				</tr>

				</table>
				<br><hr>
				<input type="submit" name="submit">
          </fieldset>

	
			
</form>



	</body>
	</html>