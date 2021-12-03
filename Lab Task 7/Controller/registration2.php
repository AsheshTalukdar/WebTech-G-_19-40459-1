<?php

    $house="";
    $house_error="";
    $road="";
    $road_error="";
    $block="";
    $block_error="";
    $division="";
    $division_error="";
    $district="";
    $district_error="";
    $gender="";
    $gender_error="";
    $birth_day="";
    $birth_day_error="";
    $birth_month="";
    $birth_month_error="";
    $birth_year="";
    $birth_year_error="";
    $phone="";
    $phone_error="";
    $divisions=["Barisal","Chittagong","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet"];
    $districts=["Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati","Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Mymensingh","Narayanganj","Narsingdi","Netrakona","Rajbari","Shariatpur","Sherpur","Tangail","Bagerhat","Chuadanga","Jessore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira","Bogra","Joypurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj","Dinajpur","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon","Habiganj","Moulvibazar","Sunamganj","Sylhet"];
    $hasError=false;

    if(isset($_POST['reg2']))
    {
        if(empty($_POST["house"]))
        {
            $hasError=true;
            $house_error="Field can not be Empty";
        }
        else{
            $house=$_POST["house"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $road_error="Field can not be Empty";
        }
        else{
            $road=$_POST["road"];
        }

        if(empty($_POST["block"]))
        {
            $hasError=true;
            $block_error="Field can not be Empty";
        }
        else{
            $block=$_POST["block"];
        }

		if(empty(($_POST["division"])))
        {
            $hasError=true;
            $division_error="Select Your Division";
        }
        else{
            $division=$_POST["division"];
        }

		if(empty($_POST["district"]))
        {
            $hasError=true;
            $district_error="Select Your District";
        }
        else{
            $district=$_POST["district"];
        }

		if(empty($_POST["gender"]))
        {
            $hasError=true;
            $gender_error="Field can not be Empty";
        }
        else{
            $gender=$_POST["gender"];
        }

		if(empty($_POST["day"]))
        {
            $hasError=true;
            $day_error="Field can not be Empty";
        }
        else{
            $birth_day=$_POST["day"];
			
        }

		if(empty($_POST["month"]))
        {
            $hasError=true;
            $birth_month_error="Field can not be Empty";
        }
        else{
            $birth_month=$_POST["month"];
        }

		if(empty($_POST["year"]))
        {
            $hasError=true;
            $birth_year_error="Field can not be Empty";
        }
        else{
            $birth_year=$_POST["year"];
        }

		if(empty($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Field can not be Empty";
        }
		elseif(!is_numeric($_POST['phone']))
		{
			$hasError=true;
            $phone_error="Field Must Be Numaric";
		}
        else{
            $phone=$_POST["phone"];
        }

		if(!$hasError)
		{
			setcookie('house',$house,time()+(60*10));
			setcookie('road',$road,time()+(60*10));
			setcookie('block',$block,time()+(60*10));
			setcookie('division',$division,time()+(60*10));
			setcookie('district',$district,time()+(60*10));
			setcookie('gender',$gender,time()+(60*10));
			setcookie('b_day',$birth_day,time()+(60*10));
			setcookie('b_month',$birth_month,time()+(60*10));
			setcookie('b_year',$birth_year,time()+(60*10));
			setcookie('phone',$phone,time()+(60*10));
			header('Location: registration3.php');
		}
    }
?>