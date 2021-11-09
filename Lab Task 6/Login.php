<?php 
    include('./Controller/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <?php
        include("./header.php");
        if($status=="e_v")
        {
            echo "<div class='err'>Username and Password cannot be empty</div>";
        }
        elseif($status=="w_u_p")
        {
            echo "<div class='err'>Wrong Username or Password</div>";
        }
    ?>
        <div class="form_container">
            <form action="" method="post">
                <h2>Login</h2>
                <table align="center">
                    <tr>
                        <td>Username:</td>
                        <td><input onfocusout="checkU(this)" type="text" name="username"></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="uname_err"></td>
					</tr>
                    <tr>
                        <td>Password:</td>
                        <td><input onfocusout='checkP(this)' type="text" name="password"></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="p_err"></td>
					</tr>
                    <tr>
                        <td></td>
                        <td><input class="btn" type="submit" name="login" id="login" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>    
</body>
</html>