<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="../controller/createUser.php" method="POST" enctype="multipart/form-data">
    <table>
        <fieldset style="height: 320px; width: 400px;"> 
            <legend><b>Add User</b> </legend>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="Phonenumber">Phone Number:</label><br>
  <input type="number" id="Phonenumber" name="Phonenumber"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="bankname">Bank Name:</label><br>
  <input type="text" id="text" name="bankname"><br>
  <label for="accnum">Bank Account Number:</label><br>
  <input type="number" id="accnum" name="accnum"><br><br>



  <input type="file" name="image"><br><br>
  <input type="submit" name = "adduser" value="Add">
  <input type="reset">

  </fieldset> 
  </table>
</form> 

</body>
</html>

