<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<fieldset>			
			<h1 style="font-size: 35px;color: green;">Xcompany</h1>
			<div style="font-size: 20px;   text-align: right;">		
					<label>Logged in as  |</label>
					<a href="Log out.php"> Log out</a>
               </div>               
		</fieldset>

		<fieldset style="height: 400px;  width: 1488px;">

          
			    
			<div style="font-size: 20px;   text-align: left;">

					<b>Account</b><hr><br><br>
					&#9679
					<a href="1(E)_Logged In Dashboard.php"> Dashboard </a><br>
					&#9679
					<a href="1(F)_View Profile.php"> View Profile </a><br>
					&#9679
					<a href="1_Edit Profile.php"> Edit Profile </a><br>
					&#9679
					<a href="1(G)_Profile Picture.php"> Change Profile Picture </a><br>
					&#9679
					<a href="1(H)_Change Password.php"> Change Password </a><br>
					&#9679
					<a href="Log out.php"> Log Out </a><br>
					
				
               </div>

	

	</fieldset>
			
</form>



	</body>
	</html>