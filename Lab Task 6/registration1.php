<?php 
	include('./Controller/registration1.php');
?>
<!DOCTYPE html>
<html>
	<head>

		<title>Sign Up</title>
	</head>
	<body>
		<?php include("./header.php") ?>
		<div class="wrn" id="err_msg">

		</div>
		
		<div class="progress">
			<h3>
				<span style="color: #000000;">Step 1 > </span>
				<span>Step 2 > </span>
				<span>Step 3 </span>

			</h3>
		</div>
		<div >
			<form action="" method="POST">
				<h2>Personal Info</h2>
				<table align="center">
					<tr>
						<td>Username:</td>
						<td><input type="text" name="user_name" onfocusout='check(this)' placeholder="Username" id="uname" value="<?php echo $user_name ?>"></td>
						<td><?php echo $user_name_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="uname_err"></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" onfocusout='checkFname(this)' name="first_name" placeholder="First Name" id="f_name" value="<?php echo $first_name ?>"></td>
						<td><?php echo $first_name_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="f_name_err"></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input onfocusout='checkLname(this)' type="text" name="last_name" placeholder="Last Name" id="l_name" value="<?php echo $last_name ?>"></td>
						<td><?php echo $last_name_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="l_name_err"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input onfocusout='checkE(this)' type="text" name="email" placeholder="Email" id="email" value="<?php echo $email ?>"></td>
						<td><?php echo $email_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="e_err"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input onfocusout='checkP(this)' type="password" name="password1" id="pass" placeholder="Password" value="<?php echo $password1 ?>"></td>
						<td><?php echo $password1_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="p_err"></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input onfocusout='checkP2(this)' type="password" name="password2" id="pass2" placeholder="Confirm Password" value="<?php echo $password2 ?>"></td>
						<td><?php echo $password2_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="p2_err"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" id="sub1" name="reg1" type="submit" value="Next"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>


