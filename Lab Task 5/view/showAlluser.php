<?php  
require_once '../controller/userInfo.php';

$users = fetchAlluser();


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
<legend style="color: red;"><b>All User</b> </legend>
<table>
	<thead>
		<tr>
			
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>Bank Name</th>
			<th>Bank Account Number</th>
			<th>Image</th>
			<th>Action</th>
		</tr>

	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><a href="showuser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['username'] ?></a></td>
				<td><?php echo $user['Phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['bankname'] ?></td>
				<td><?php echo $user['accnum'] ?></td>
				
				<td><img width="100px" src="../uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>
				


				<td><a href="edituser.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="../view/fordelete.php?id=<?php echo $user['ID'] ?>" >Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>


</body>
</html>