<?php
    include('./Controller/editAddressInfo.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

</head>
<body>
    <?php 
        include("./header.php");
    ?>
    <div>
        <h2>Edit Address Information</h2>
        <form action="" method="post">  
                <table align="center">
                    <tr>
                        <td>
                            Address Information:<br>
                        </td>
                        <td>
                            House <input onfocusout="checkH(this)" type="text" name="house" id="house" placeholder="House No" value="<?php echo $addr_house ?>"><br>
                            Road <input onfocusout="checkR(this)" type="text" name="road" id="road" placeholder="Road No" value="<?php echo $addr_road ?>"><br>
                            Block <input onfocusout="checkB(this)" type="text" name="block" id="block" placeholder="Block No" value="<?php echo $addr_block ?>"><br>
                        </td>
                        <td>
                            <?php echo $addr_error ?>
                        </td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="house_err"></td>
					</tr>
                    <tr>
						<td></td>
						<td colspan="2" id="road_err"></td>
					</tr>
                    <tr>
						<td></td>
						<td colspan="2" id="block_err"></td>
					</tr>
                    <tr>
                        <td>
                            Division:
                        </td>
                        <td>
                            <select name="division" id="division">
                                <option value="--Division--" disabled>--Division--</option>
                                <?php 
                                    foreach($divisions as $d)
                                    {
                                        echo "<option ", $division==$d?'SELECTED':'' ," value='$d'>$d</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            District:
                        </td>
                        <td>
                            <select name="district" id="district">
                                <option value="--district--" disabled>--District--</option>
                                <?php 
                                    foreach($districts as $d)
                                    {
                                        echo "<option ", $district==$d?'SELECTED':'' ," value='$d'>$d</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Phone Number</td>
                        <td><input onfocusout="checkP(this)" type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone ?>"></td>
                        <td><?php echo $phone_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="phone_err"></td>
					</tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td>
                            <span>Day</span>
                            <select name="day" id="day">
                                    <?php for($i=1;$i<=31;$i++){ echo "<option value=$i ",$birth_day==$i?'selected':'',">$i</option>"; } ?>
                            </select> 
                            <span>Month</span>
                            <select name="month" id="month">
                                    <?php for($i=1;$i<=12;$i++){ echo "<option value=$i ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
                            </select> <br>
                            <span>Year</span>
                            <select name="year" id="year">
                                    <?php for($i=1990;$i<=2008;$i++){ echo "<option value=$i ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" id="gender" value="male" <?php echo $gender=='male'?"checked":'' ?> >
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" id="gender" value="female" <?php echo $gender=='female'?"checked":'' ?> >
                            <label for="gender">Female</label>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="sub2" class="btn" name="update" type="submit" value="Update"></td>
                        <td></td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>