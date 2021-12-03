<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require "./Model/db_config.php";
    session_start();
    $status="ok";
    if(isset($_POST['login']))
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
        }
        else{
            $status="e_v";
        }

        if($status=="ok")
        {
            $query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
            $result=get($query);
            if(count($result)>0)
            {
                $_SESSION['id']=$result[0]['id'];
                $_SESSION['uname']=$result[0]['username'];
                $_SESSION['status']=$result[0]['status'];
                header('Location: _home.php');
            }
            else{
                $status="w_u_p";
            }
        }
    }

   
      
        
   
?>