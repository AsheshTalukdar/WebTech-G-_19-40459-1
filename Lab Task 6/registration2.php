<?php 
	include('./Controller/registration2.php');
?>
<!DOCTYPE html>
<html>
	<head>

	<title>Sign Up</title>
	</head>
	<body>
	<?php include("./header.php") ?>
	<div class="progress">
		<h3>
			<span style="color: #00FF0A;">Step 1 > </span>
			<span style="color: #000000;">Step 2 > </span>
			<span>Step 3  </span>

		</h3>
	</div>
		<div class="form_container">
			<form method="POST">
				<table align="center">
					<tr>
						<td><u>Address Information:</u></td>
					</tr>
					<tr>
						<td>&nbsp; House No.:</td>
						<td><input onfocusout="checkH(this)" type="text" name="house" placeholder="House No." id="house" value="<?php echo $house ?>"></td>
						<td><?php echo $house_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="house_err"></td>
					</tr>
					<tr>
						<td>&nbsp; Road No.:</td>
						<td><input onfocusout="checkR(this)" type="text" name="road" placeholder="Road No." id="road" value="<?php echo $road ?>"></td>
						<td><?php echo $road_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="road_err"></td>
					</tr>
					<tr>
						<td>&nbsp; Block No.:</td>
						<td><input onfocusout="checkB(this)" type="text" name="block" placeholder="Block No." id="block" value="<?php echo $block ?>"></td>
						<td><?php echo $block_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="block_err"></td>
					</tr>
					<tr>
					<td><br>Division:</td>
					<td><br><select name="division" id="division">
								<option value="--Division--" selected disabled>--Division--</option>
								<?php 
									foreach($divisions as $d)
									{
										echo "<option value='$d'>$d</option>";
									}
								?>
							</select>
					</td>
					<td><?php  ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td>District:</td>
						<td><select name="district" id="district">
								<option value="--district--" selected disabled>--District--</option>
								<?php 
									foreach($districts as $d)
									{
										echo "<option value='$d'>$d</option>";
									}
								?>
							</select>
						</td>
						<td><?php echo $district_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="male" <?php echo $gender=='male'?"checked":'' ?>>Male<input type="radio" name="gender" value="female" <?php echo $gender=='female'?"checked":'' ?>>Female</td>
						<td><?php echo $gender_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td>Date of Birth:</td>
						<td>
							<?php echo $birth_day; ?>
							<span>Day</span>
							<select name="day" id="day">
									<?php for($i=1;$i<=31;$i++){ echo "<option value='$i' ", $birth_day==$i?'selected':'',">$i</option>"; } ?>
							</select> 
							<span>Month</span>
							<select name="month" id="month">
									<?php for($i=1;$i<=12;$i++){ echo "<option value='$i' ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
							</select> <br>
							<span>Year</span>
							<select name="year" id="year">
									<?php for($i=1990;$i<=2008;$i++){ echo "<option value='$i' ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id=""></td>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><input onfocusout="checkP(this)" type="text" name="phone" placeholder="Phone Number" id="phone" value="<?php echo $phone ?>"></td>
						<td><?php echo $phone_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" id="phone_err"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" name="reg2" id="sub2" type="submit" value="Submit"></td>
						<td></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>



