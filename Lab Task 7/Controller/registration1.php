<?php
    $user_name="";
	$user_name_error="";
	$first_name="";
	$first_name_error="";
	$last_name="";
	$last_name_error="";
	$email="";
	$email_error="";
	$password1="";
	$password1_error="";
	$password2="";
	$password2_error="";
	$hasError=false;

	function checkSpecialChar($str) {
        $len=strlen($str);
		for($i=0;$i<$len;$i++)
		{
			if($str[$i]=='#')
			{
				return true;
			}
		}
        return false;
	}
    
    if(isset($_POST['reg1']))
    {
        if(empty($_POST['user_name']))
		{
			$hasError=true;
			$user_name_error="Field Is Required";
		}
		elseif(strlen($_POST['user_name'])<5)
		{
			$hasError=true;
			$user_name_error="Username must be greater then 5";
		}
		else
		{
			$user_name=$_POST['user_name'];
		}

		if(empty($_POST['first_name']))
		{
			$hasError=true;
			$first_name_error="Field Can Not Be Empty";
		}
		else
		{
			$first_name=$_POST['first_name'];
		}

		if(empty($_POST['last_name']))
		{
			$hasError=true;
			$last_name_error="Field Can Not Be Empty";
		}
		else
		{
			$last_name=$_POST['last_name'];
		}

		if(empty($_POST['email']))
		{
			$hasError=true;
			$email_error="Field Can Not Be Empty";
		}
		elseif(!(strpos($_POST["email"],"@")>0) and !(strpos($_POST["email"],".")>0))
		{
			$hasError=true;
			$email_error="Email Must Contain '@' and '.'";
		}
		else
		{
			$email=$_POST['email'];
		}

		if(empty($_POST['password1']) or empty($_POST['password2']))
		{
			$hasError=true;
			$password1_error="Field Can Not Be Empty";
		}
		elseif((strlen($_POST['password1'])<6) or (strlen($_POST['password2'])<6))
		{
			$hasError=true;
			$password1_error="Password must be greater then 6";
		}
		elseif(!checkSpecialChar($_POST['password1']))
		{
			$hasError=true;
			$password1_error="Password must Contain special Char";
		}
		elseif(!checkSpecialChar($_POST['password2']))
		{
			$hasError=true;
			$password1_error="Password must Contain special Char";
		}
		elseif($_POST['password1']!=$_POST['password2'])
		{
			$hasError=true;
			$password2_error="Password Dose not Match";
		}
		else{
			$password1=$_POST['password1'];
			$password2=$_POST['password2'];
		}
		if(!$hasError)
		{
			setcookie('uname',$user_name,time()+(60*10));
			setcookie('first_name',$first_name,time()+(60*10));
			setcookie('last_name',$last_name,time()+(60*10));
			setcookie('email',$email,time()+(60*10));
			setcookie('password',$password1,time()+(60*10));
			header('Location: registration2.php');
		}
    }
?>