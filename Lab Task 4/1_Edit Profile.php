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
	<fieldset style=" height: 250px;  width: 450px;margin: -400px auto;">
          	<legend><b>EDIT PROFILE</b></legend>
          	<?php 
          	$data = file_get_contents("data.json");  
                          $data = json_decode($data, true); 
                          foreach($data as $row)   {
            /*                
          	 echo <br>.'Name:'.<br><hr>
          	echo <br>.'Email:'.<br><hr>
          	echo <br>.'Gender:'.<br><hr>
          	 echo <br>.'Date of Birth:'.<br><hr>
          	 */         
          	                   echo '<tr>
                               <td>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["name"].'</td><br>
                               <hr>
                               <td>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["e-mail"].'</td><br><hr>
                               <td>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["gender"].'</td><br><hr>
                               <td>Date of Birth:&nbsp;&nbsp;'.$row["dob"].'</td><br><hr>
                               </tr>'; 
                          }

                          ?>  


          	<input type="submit" name="Submit">
          </fieldset>

	
			
</form>



	</body>
	</html>