<?php 

require_once '../model/model.php';

if (deleteuser($_GET['id'])) {
    header('Location: ../view/showAlluser.php');
}

 ?>