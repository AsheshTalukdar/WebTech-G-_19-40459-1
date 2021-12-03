<?php
    include("./Model/db_config.php");

    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM about_user WHERE id='$id'";
    $data=get($query);
    $data=$data[0];
    $addr_house=$data['house'];
    $addr_error="";
    $addr_road=$data['road'];
    $addr_block=$data['block'];
    $division=$data['division'];
    $division_error="";
    $district=$data['district'];
    $district_error="";
    $phone=$data['phone'];
    $phone_error="";
    $birth=$data['birth'];
    $birth=explode('-',$birth);
    $birth_day=$birth[2];
    $birth_month=$birth[1];
    $birth_year=$birth[0];
    $gender=$data['gender'];
    $hasError=false;
    $divisions=["Barisal","Chittagong","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet"];
    $districts=["Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati","Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Mymensingh","Narayanganj","Narsingdi","Netrakona","Rajbari","Shariatpur","Sherpur","Tangail","Bagerhat","Chuadanga","Jessore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira","Bogra","Joypurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj","Dinajpur","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon","Habiganj","Moulvibazar","Sunamganj","Sylhet"];
    

    if(isset($_POST['update']))
    {
        if(empty($_POST["house"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_house=$_POST["house"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_road=$_POST["road"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_road=$_POST["road"];
        }

        if(empty($_POST["block"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_block=$_POST["block"];
        }

        if(empty($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Phone field can not be Empty";
        }
        elseif(!is_numeric($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Phone Number Must be Numaric";
        }
        else{
            $phone=$_POST["phone"];
        }

        $district=$_POST['district'];
        $division=$_POST['division'];

        if(!$hasError)
        {
            $birth=$birth_year."-".$birth_month."-".$birth_day;
            $querry="UPDATE about_user SET house='$addr_house', road='$addr_road', block='$addr_block', division='$division', district='$district', gender='$gender', birth='$birth', phone='$phone' WHERE id='$id'";
            $result=execute($querry);
            if($result!=true)
            {
                print_r($result);
            }
        }
    }
?>