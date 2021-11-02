<?php  
require_once '../model/model.php';


if (isset($_POST['updateuser'])) {

	$data['username'] = $_POST['username'];
	$data['Phonenumber'] = $_POST['Phonenumber'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['bankname'] = $_POST['bankname'];
	$data['accnum'] = $_POST['accnum'];



	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateuser($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/showuser.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>