


<?php 
    include('./Controller/registration3.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>  
    
</script>  
</head>
<body>
    <table cellspacing="40">

        
            <h1  style="text-align: center; color: #000000;"> Online Auction System</h1><br>
<style>
   h1{
        font-size:40px ;
    }

body {
  background-image: url("icon1.jpg");
  
   background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
     background-size: cover;
     background-color: #D3D3D3;
}ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}li a:hover {
  background-color: #111;
}.active {
  background-color: #04AA6D;
}

div1{
    color: black;
    text-align: center;
    font-size: 40px;
    height: 890px;
    width: 400px;
}
#footer{
    position: fixed;
    padding: 10px 10px 0px 10px;
    bottom: 0;
    width: 100%;
    height: 40px;

}
.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<ul>
 <li><a class="active" href="./index.php">Home</a></li>
  <li><a class="active" href="./Login.php">Log In</a></li>
  <li><a class="active" href="./Registration1.php">Sign Up</a></li>
</ul>

        <div class="progress">
            <h3>
                <span style="color: #00FF0A;">Step 1 > </span>
                <span style="color: #00FF0A;">Step 2 > </span>
                <span style="color:black;" >Step 3 </span>

            </h3>
        </div>
        <div class="form_container">
            <form action="" method="post">
               <br>
                <h2 style="color:black;">Account Info</h2><br><br>
                <table align="center">
                    <tr>
                        <td style="color:black;">Account Type :</td>
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

 

<?php
    include('footer.php');
?>
</body>
</html>

</body>

</html>




