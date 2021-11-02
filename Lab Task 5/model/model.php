<?php 

require_once 'db_connect.php';


function showAlluser(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showuser($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$username%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function adduser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (username, Phonenumber, password, bankname,accnum, image)
VALUES (:username, :Phonenumber, :password, :bankname, :accnum, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':Phonenumber' => $data['Phonenumber'],
        	':password' => $data['password'],
        	':bankname' => $data['bankname'],
            ':accnum' => $data['accnum'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateuser($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set username = ?, Phonenumber = ?, password = ?, bankname = ?, accnum = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['username'], $data['Phonenumber'], $data['password'], $data['bankname'], $data['accnum'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteuser($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}