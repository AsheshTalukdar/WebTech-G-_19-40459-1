
<?php 
	session_start();

	$data=file_get_contents('data.json');
	$decod_data=json_decode($data,true);
	//var_dump($decod_data);

	
	foreach ($decod_data as $key => $value) {
		$un=$decod_data[$key]["username"];
		$pass=$decod_data[$key]["Confirm Password"];

		echo $un. ' is name and password is '.$pass;
}

	$username ='admin';
	$password ='admin#';

	if (isset($_POST['un'])) {
		if ($_POST['un']==$username && $_POST['pass']==$password) {
			$_SESSION['un'] = $username;
			//$_SESSION['pass'] = $password;

			header("location: 1(E)_Logged In Dashboard.php");
		}
		/*
 	if(isset($_POST['submit']))
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username="admin";
            $password="admin#";

			header("location: 1(E)_Logged In Dashboard.php");
        }
    }
*/
		else{
			$msg = "Username or Password is incorrect";
		}
	
}

 ?>

<?php
$username ="";
$err_un ="";
$password= "";
$err_pass= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["un"])) {
    $err_un = "Cannot be Empty";
  }
      else {
    $username = $_POST["un"];
  }

  if (!preg_match("/^[a-z\.A-Z-' ]*$/",$username)) {
  $err_un = "Only letters, white space allowed";
  }
  
  /* if (str_word_count($uname)<2) {
  $err_name="At least two word needed";
  } */

if(empty($_POST["pass"])){

	$err_pass="Password is required";
 } 
//else if(!strpos($_POST["pass"],"#")){

	//$err_pass="Special character needed";
//}


//else{
	//$password=$_POST["pass"];
//{if(strlen($_POST["pass"]<='8')){
//	$err_pass="Password MUST contain 8 letters";
//}
}


/*

<span class="error">*<?php echo $err_un; ?></span></td>
<span class="error">*<?php echo $err_pass; ?></span></td>



// 1(E)_Logged In Dashboard.php
 <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>
*/
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php require 'upper.php';?>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
	


			<fieldset style="height: 250px;  width: 1488px;">
      
      <fieldset style=" height: 180px;  width: 500px;margin: 0px auto;"> 

				<legend><b>LOGIN</b></legend>
				<table>				
					<tr>
					<td><span>User Name:</span></td>
					<td><input type="text" name="un" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"></td>
					
				</tr>	
				<tr>
					
  				<td><span>Password:</span></td>  									
  				<td><input type="Password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"></td>

  			
  			</tr>
  		
  </table>
					<br><hr>
	                 <input type="checkbox" name="remember">
                 <label>Remeber me</label>
                 
                 <br><br>
              
                 <input type="submit" name="submit">
               
                 <a href="1(D)_Forgot Password.php">Forget Password?</a>

		</fieldset>
	</fieldset>
</form>

<?php require 'lower.php';?>

<span style="text-align: center; color: red;"><?php if (isset($msg)) {echo $msg;} ?></span>
	</body>
	</html>


