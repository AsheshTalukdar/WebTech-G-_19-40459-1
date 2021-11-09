<?php 
    include('./Controller/registration3.php');
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
                <span style="color: #00FF0A;">Step 2 > </span>
                <span style="color: #00FF0A;">Step 3 </span>

            </h3>
        </div>
        <div class="form_container">
            <form action="" method="post">
                <h2>Account Info</h2>
                <table align="center">
                    <tr>
                        <td>Account Type :</td>
                        <td>
                            <select name="acc_type">
                                <option value="----">--Select--</option>
                                <option value="buyer">Buyer</option>
                                <option value="seller">Seller</option>
                                <option value="broker">Broker</option>
                            </select>
                        </td>

                    <tr>
                        <td></td>
                        <td><input class="btn" name="reg3" id="sub3" type="submit" value="Complete"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>