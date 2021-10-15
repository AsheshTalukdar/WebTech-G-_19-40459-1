

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
<?php require 'upper.php';?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			

			<fieldset style="height: 250px;  width: 1488px;">
      
      <fieldset style=" height: 150px;  width: 350px;margin: 0px auto;"> 

				<legend><b>FORGOT PASSWORD</b></legend>

			
					<span>Enter Email:</span>
					<input type="text" name="Email"> <br> <br><hr>
					
				    <input type="submit" name="submit">
			
				
                 
		</fieldset>
		</fieldset>
	</form>

	
	<?php require 'lower.php';?>
</body>
</html>