<?php
    include("./Model/db_config.php");
    session_start();
    $id=$_SESSION['id'];
    $prev_password="";
    $prev_password_error="";
    $password1="";
    $password1_error="";
    $password2="";
    $password2_error="";
    $err_message="";
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

    if(isset($_POST['sub']))
    {
        if(empty($_POST['prev_password']))
        {
            $hasError=true;
            $prev_password_error="You must enter your Previous Password";
        }
        else{
            $prev_password=$_POST['prev_password'];
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
            $query="SELECT password from `user` where id='$id'";
            $p_pass=get($query);
            $p_pass=$p_pass[0]['password'];
            if($p_pass == $prev_password)
            {
                $query="UPDATE `user` SET password='$password2' WHERE id='$id'";
                $result=execute($query);
                if($result==true)
                {
                    header("Location: _home.php");
                }
                else{
                    print_r($result);
                }
            }
            else{
                $err_message="You Have Entered  Wrong Current Password";
            }
        }
    }
?>