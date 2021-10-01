<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	.red{
		color: red;
	}
	</style>
	</head>
<body>
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateofbirthErr =$degreeErr=$bloodgroupErr= "";
$name = $email = $gender = $dateofbirth = $degree =$bloodgroup= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Cannot be Empty";
  } 
  else {
    $name = test_input($_POST["name"]);
  }
   if (str_word_count($name)<2) {
  $nameErr="At least two word needed";
  }
  
  if (!preg_match("/^[a-z\.A-Z-' ]*$/",$name)) {
  $nameErr = "Only letters, white space allowed";
  }

  /*if(!preg_match('#^\w+\s\w+#',$_POST['name'])){
  $nameErr="At least two words needed";
  }*/

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }    
  else {
    $email = test_input($_POST["email"]);
  }

  $email=test_input($_POST["email"]);
  if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
 }



  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "Cannot be Empty";
  }
  /*elseif (!preg_match("/^([0-12]{2})\/([0-31]{2})/\([1953-1998])$/",$dateofbirth)) {
     $dateofbirthErr="Put a Valid date";

     } */
   else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "At least on of them must be selected";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr ="Cannot be Empty"; 
  } 
  else {
    $degree =test_input($_POST["degree"]);
    }
  //if (count($degree)>2) {
 // $degreeErr="At least two of them must be selected";
 // }  
  
 


  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr ="Must select One"; 
  } else {
    $bloodgroup =test_input($_POST["bloodgroup"]);
    }
    /* if (!preg_match("",$bloodgroup)) {
     $bloodgroupErr = "Must be selected";
}
  if (!isset($_POST['bloodgroup'])) {
  $bloodgroupErr ="Select your Blood group";
  }
*/
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<b>NAME</b><br><br>
<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<b>EMAIL</b><br><br>
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<b>DATE OF BIRTH</b><br><br>
<input type="date" name="dateofbirth">
<span class="error">*<?php echo $dateofbirthErr;?></span>
<br><br>
<b>GENDER</b><br><br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<b>DEGREE</b><span class="error"> &nbsp * <?php echo $degreeErr;?></span><br><br>
<input type="checkbox" name="degree[]" value="SSC"><label>SSC</label>
<input type="checkbox" name="degree[]" value="HSC"><label>HSC</label>
<input type="checkbox" name="degree[]" value="BSc"><label>BSc</label>
<input type="checkbox" name="degree[]" value="MSc"><label>MSc</label>

<br><br>
<b>BLOOD GROUP</b><span class="error"> &nbsp * <?php echo $bloodgroupErr;?></span><br><br>
<select name="bloodgroup">
<option disabled selected value>Choose one...</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>

<input type="submit" name="submit" value="Submit">

</form>
<?php

function test_input($data) {
 // $data = trim($data);
 // $data = stripslashes($data);
 // $data = htmlspecialchars($data);
  return $data;
}
?>


<?php
	echo "<h1>Input :</h1>";
	echo $name."<br>";
	echo $email."<br>";
	echo $dateofbirth."<br>";
	echo $gender."<br>";
if(isset($_POST['submit'])){
if(!empty($_POST['degree'])){
foreach($_POST['degree'] as $selected){
echo $selected."<br>";
}
}
}
echo $bloodgroup."<br>";
	
?>
</body>
</html>