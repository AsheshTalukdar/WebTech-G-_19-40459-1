<?php
    include('./Controller/editPersonalInfo.php');
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
    <div class="form_container">
        <h2>Edit Personal Information</h2>
        <form action="" method="post">  
                <table align="center">

                                        <tr>
                        <td>Username</td>
                        <td><input onfocusout="checkP(this)" type="text" name="username" id="username" placeholder="username" value="<?php echo $username ?>"></td>
                        <td><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td>First Name</td>
                        <td><input onfocusout="checkP(this)" type="text" name="fname" id="fname" placeholder="fname" value="<?php echo $fname ?>"></td>
                        <td><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>
                                                            <tr>
                        <td>Last name</td>
                        <td><input onfocusout="checkP(this)" type="text" name="lname" id="lname" placeholder="lname" value="<?php echo $lname ?>"></td>
                        <td><?php echo $addr_error?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="addr_error"></td>
                    </tr>

                    
                    <tr>
                        <td>Email</td>
                        <td><input onfocusout="checkP(this)" type="text" name="email" id="email" placeholder="email" value="<?php echo $email ?>"></td>
                        <td><?php echo $email_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="email_error"></td>
					</tr>
                        <td><input id="sub2" class="btn" name="update" type="submit" value="Update"></td>
                        <td></td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>