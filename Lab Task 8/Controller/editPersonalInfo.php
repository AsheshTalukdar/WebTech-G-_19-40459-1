<?php
    include("./Model/db_config.php");

    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM user WHERE id='$id'";
    $data=get($query);
    $data=$data[0];
    $username=$data['username'];
    $addr_error="";
    $fname=$data['fname'];
    $lname=$data['lname'];
    $email=$data['email'];
    $email_error="";
    $hasError=false;
    

    if(isset($_POST['update']))
    {
        if(empty($_POST["username"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $username=$_POST["username"];
        }

        if(empty($_POST["fname"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $fname=$_POST["fname"];
        }

        if(empty($_POST["lname"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $lname=$_POST["lname"];
        }

        if(empty($_POST["email"]))
        {
            $hasError=true;
           $email_error="Field can not be Empty";
        }
        else{
            $email=$_POST["email"];
        }

        if(!$hasError)
        {
            $querry="UPDATE user SET username='$username', fname='$fname', lname='$lname', email='$email' WHERE id='$id'";
            $result=execute($querry);
            if($result!=true)
            {
                print_r($result);
            }
        }
    }
?>