

<?php 
	
	if (!empty($_POST['remember'])) {
		setcookie("username", $_POST['un'], time()+10);
		setcookie("password", $_POST['pass'], time()+10);
		echo "Cookies set successfully";
		
	}
	else{
		setcookie("username", "");
		setcookie("password", "");
		echo "Cookies not set";
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
 
          <div style="height: 300px;width: 450px;margin: -400px auto;">
					<?php 
					session_start();

					if (isset($_SESSION['un'])) {
					echo "<h1> Welcome ". $_SESSION['un']. "</h1>";

					}
					else{
					header("location: 1(C)_Login.php");
					}
          ?>
          </div>
	
	
 
			
</form>



	</body>
	</html>

	



