<?php 

require_once '../controller/userInfo.php';
$user = fetchuser($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateuser.php" method="POST" enctype="multipart/form-data">
  <fieldset style="height: 350px; width: 400px;"> 
            <legend><b>Edit User</b> </legend>
  <label for="username">User Name::</label><br>
  <input value="<?php echo $user['username'] ?>" type="text" id="username" name="username"><br>
  <label for="Phonenumber">Phone number:</label><br>
  <input value="<?php echo $user['Phonenumber'] ?>" type="number" id="Phonenumber" name="Phonenumber"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $user['password'] ?>" type="password" id="password" name="password"><br>
  <label for="bankname">Bank Name:</label><br>
  <input value="<?php echo $user['bankname'] ?>" type="text" id="bankname" name="bankname"><br>
    <label for="accnum">Bank Account Number:</label><br>
  <input value="<?php echo $user['accnum'] ?>" type="number" id="accnum" name="accnum"><br><br>



  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateuser" value="Update">
  <input type="reset"> 
</fieldset>
</form> 

</body>
</html>

