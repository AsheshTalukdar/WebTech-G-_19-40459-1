<?php
    include('./Model/db_config.php');
    $acc_type="";
    $acc_type_error="";

    $hasError=false;
    
    if(isset($_POST['reg3']))
    {
        if(!isset($_POST['acc_type']))
        {
            $hasError=true;
            $acc_type_error="You Must Select A Option";
        }
        else{
            $acc_type=$_POST['acc_type'];
        }        
        if(!$hasError)
        {
            //user Table
            $uname=$_COOKIE['uname'];
            $first_name=$_COOKIE['first_name'];
            $last_name=$_COOKIE['last_name'];
            $email=$_COOKIE['email'];
            $password=$_COOKIE['password'];
            $query="INSERT INTO user(username,fname,lname,email,password,status) VALUES('$uname','$first_name','$last_name','$email','$password','Pending')";
            $query=execute($query);
            //GET ID
            $query2="SELECT id FROM `user` WHERE username='$uname'";
            $id=get($query2);
            $id=$id[0]['id'];
            //About User Table
            $birth=$_COOKIE['b_year']."-".$_COOKIE['b_month']."-".$_COOKIE['b_day'];
            $house=$_COOKIE['house'];
            $road=$_COOKIE['road'];
            $block=$_COOKIE['block'];
            $division=$_COOKIE['division'];
            $district=$_COOKIE['district'];
            $gender=$_COOKIE['gender'];
            $phone=$_COOKIE['phone'];
            $querry3="INSERT INTO about_user(id,house,road,block,division,district,gender,birth,phone) VALUES('$id','$house','$road','$block','$division','$district','$gender','$birth','$phone')";
            $query3=execute($querry3);
     
            
            if($query && $querry3)
            {
                session_start();
                $_SESSION['id']=$id;
                $_SESSION['uname']=$uname;
            }
        }
        if(isset($_SESSION['id']))
        {
            header('Location: _home.php');
        } 
    }
?>