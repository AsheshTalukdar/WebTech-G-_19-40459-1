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
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <?php include('./header.php') ?>
    <div >
        <h1>Account Details</h1>

        <h3>Personal Details</h3>
            <table>
                <tr>
           <td>User Name</td>
            <td><?php echo $data['username'] ?></td>
       </tr>
            <tr>     
           <td>First Name</td>
           <td><?php echo $data['fname'] ?></td>
        
</tr> 
            <tr>     
           <td>Last Name</td>
           <td><?php echo $data['lname'] ?></td>
        
</tr> 
            <tr>     
           <td>Email</td>
           <td><?php echo $data['email'] ?></td>
        
</tr> 
            <tr>     
           <td>Password</td>
           <td><?php echo $data['password'] ?></td>
        
 
        <tr>
          <td> Account Status</td> 
        <td>  <?php echo $data['status'] ?></td> 
       </tr>
</table>

<h3>Address Information</h3>

<table>
</tr> 
            <tr>     
           <td>House No.</td>
           <td><?php echo $data2['house'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Road No.</td>
           <td><?php echo $data2['road'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Block No.</td>
           <td><?php echo $data2['block'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Division</td>
           <td><?php echo $data2['division'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>District</td>
           <td><?php echo $data2['district'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Gender</td>
           <td><?php echo $data2['gender'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Date of Birth</td>
           <td><?php echo $data2['birth'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td>Phone Number</td>
           <td><?php echo $data2['phone'] ?></td>
        
</tr> 
</table>


    </div>
</body>
</html>