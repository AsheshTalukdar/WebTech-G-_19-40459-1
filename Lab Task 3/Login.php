
<?php
$uname ="";
$err_name ="";
$pass= "";
$err_pass= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $err_name = "Cannot be Empty";
  }
      else {
    $uname = $_POST["uname"];
  }

  if (!preg_match("/^[a-z\.A-Z-' ]*$/",$uname)) {
  $err_name = "Only letters, white space allowed";
  }
  
  /* if (str_word_count($uname)<2) {
  $err_name="At least two word needed";
  } */

if(empty($_POST["pass"])){

	$err_pass="Password is required";
 } 
else if(!strpos($_POST["pass"],"#")){

	$err_pass="Special character needed";
}


else{
	$pass=$_POST["pass"];
} 
if(strlen($_POST["pass"]<='8')){
	$err_pass="Password MUST contain 8 letters";
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
			<fieldset>
				<legend><b>LOGIN</b></legend>
				<table>
				<tr>
					<td><span>User Name:</span></td>
					<td><input type="text" name="uname">
					<span class="error">*<?php echo $err_name; ?></span></td>
				</tr>	
				<tr>
					
  				<td><span>Password:</span></td>  									<td><input type="Password" name="pass">

  			<span class="error">*<?php echo $err_pass; ?></span></td>
  			</tr>
				</table>
                 <br>
                 <input type="checkbox" name="Remember Me" value="Remember me">
                 <label>Remeber me</label>
                 <br><br>
                 <input type="submit" name="submit">
                 <a href="dasdsadas">Forget Password?</a>

		</fieldset>
</form>



	</body>
	</html>