<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['username']);
    	require_once '../view/showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

