<?php  
require_once '../controller/userinfo.php';

$user = fetchuser($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
table,td,th{
			border:25px solid white;
		}

	</style>
</head>
<body>
<legend style="color: red;"><b>Delete</b></legend>
<table>
	<tr>
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>Bank Name</th>
			<th>Bank Account Number</th>
			<th>Image</th>
	</tr>
	<tr>
				<td><?php echo $user['username'] ?></td>
				<td><?php echo $user['Phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['bankname'] ?></td>
				<td><?php echo $user['accnum'] ?></td>
				
				<td><img width="100px" src="../uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>

				<td style="text-align: center;"><a href="../controller/deleteuser.php?id=<?php echo $user['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
	</tr>

   
</table>


</body>
</html>