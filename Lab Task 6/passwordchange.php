<?php
    require './Controller/passwordChange.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Password Change</title>
    </head>
    <body>
        <?php
            include("./header.php");
            echo "<div>".$err_message."</div>";
        ?>
        <div>
            <form method="POST">
                    <h2>Password Change</h2>
                    <table>
                        <tr>
                            <td align="left"><b>Edit Password</b></td>
                        </tr>
                        <tr>
                            <td align="left">Previous Password</td>
                            <td>:<input onfocusout="checkOP(this)" type="password" name="prev_password" value="<?php echo $prev_password ?>"></td>
                            <td><?php echo $prev_password_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="op_err"></td>
					    </tr>
                        <tr>
                            <td align="left">New Password</td>
                            <td>:<input onfocusout="checkP(this)" type="password" id="p" name="password1" value="<?php echo $password1 ?>"></td>
                            <td><?php echo $password1_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="p_err"></td>
					    </tr>
                        <tr>
                            <td align="left">Confirm new Password</td>
                            <td>:<input onfocusout="checkP2(this)" type="password" name="password2" value="<?php echo $password2 ?>"></td>
                            <td><?php echo $password2_error ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="p2_err"></td>
					    </tr>
                        <tr>
                            <td>
                            <input class="btn" id="btn" name="sub" type="submit" value="Change">
                            </td>
                        </tr>
                    </table>
            </form>
        </div>
    </body>
</html>