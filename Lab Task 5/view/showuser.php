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

<table>
	
            <legend style="color: red;"><b>User</b> </legend>
	<tr>
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>Bank Name</th>
			<th>Bank Account Number</th>
			<th>Image</th>
	</tr>
	<tr>
				<td><a href="showuser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['username'] ?></a></td>
				<td><?php echo $user['Phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['bankname'] ?></td>
				<td><?php echo $user['accnum'] ?></td>
				
				<td><img width="100px" src="../uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>
	</tr>

</table>


</body>
</html>