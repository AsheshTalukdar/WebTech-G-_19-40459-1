<?php
    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM user WHERE id='$id'";
    $data=get($query);
    $data=$data[0];
    
    $query="SELECT * FROM about_user WHERE id='$id'";
    $data2=get($query);
    $data2=$data2[0];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="./css/stylesheet2.css">
     <link rel="stylesheet" type="text/css" href="./css/stylesheet1.css">
</head>
<body>
    <table cellspacing="40">

        
            <h1  style="text-align: center; color: black;"> Online Auction System</h1><br>
<style>
   h1{
        font-size:40px ;
    }

body {
  
  
   background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
     background-color: #89ABE3FF;
}


table{
    border-collapse: collapse;
    width: 100%;
}
th,td{
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{
    background-color: green;
}

</style>
</head>
<body>
    <nav>
  <div class="navicon">
    <div></div>
  </div>

  <a class="active" href="./_home.php">Home</a>
  <a href="accDetails.php">Account Details</a>
  <a href="editAddressInfo.php">Change Address</a>
  <a href="editPersonalInfo.php">Change Personal Information</a>
  <a href="passwordchange.php">Change Password</a>
  <a href="./Controller/logout.php">Log Out</a>

</nav>
        

   
    <div >
        <h1 style="text-align: left; color: black;">Account Details</h1>

            <table>
                <tr>
           <td style="color:black;">User Name</td>
            <td style="color:black;"><?php echo $data['username'] ?></td>
       </tr>
            <tr>     
           <td style="color:black;">First Name</td>
           <td style="color:black;"><?php echo $data['fname'] ?></td>
        
</tr> 
            <tr>     
           <td style="color:black;">Last Name</td>
           <td style="color:black;"><?php echo $data['lname'] ?></td>
        
</tr> 
            <tr>     
           <td style="color:black;">Email</td>
           <td style="color:black;"><?php echo $data['email'] ?></td>
        
</tr> 
            <tr>     
           <td style="color:black;">Password</td>
           <td style="color:black;"><?php echo $data['password'] ?></td>
        
 
        <tr>
          <td style="color:black;"> Account Status</td> 
        <td style="color:black;">  <?php echo $data['status'] ?></td> 
       </tr>

            <tr>     
           <td style="color:black;">House No.</td>
           <td style="color:black;"><?php echo $data2['house'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Road No.</td>
           <td style="color:black;"><?php echo $data2['road'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Block No.</td>
           <td style="color:black;"><?php echo $data2['block'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Division</td>
           <td style="color:black;"><?php echo $data2['division'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">District</td>
           <td style="color:black;"><?php echo $data2['district'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Gender</td>
           <td style="color:black;"><?php echo $data2['gender'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Date of Birth</td>
           <td style="color:black;"><?php echo $data2['birth'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td style="color:black;">Phone Number</td>
           <td style="color:black;"><?php echo $data2['phone'] ?></td>
        
</tr> 
</table>


    </div>


</body>
</html>

</body>

</html>























