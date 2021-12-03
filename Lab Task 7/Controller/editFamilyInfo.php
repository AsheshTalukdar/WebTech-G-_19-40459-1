<?php
    include("./Model/db_config.php");
    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM parents where id='$id'";
    $data=get($query);
    $data=$data[0];
    $f_name=$data['father_name'];
    $f_name_err="";
    $f_nid=$data['father_nid'];
    $f_nid_err="";
    $f_occupation=$data['father_occu'];
    $f_occupation_err="";
    $f_work=$data['father_addr'];
    $f_work_err="";
    $m_name=$data['mother_name'];
    $m_name_err="";
    $m_nid=$data['mother_nid'];
    $m_nid_err="";
    $m_occupation=$data['mother_occu'];
    $m_occupation_err="";
    $m_work=$data['mother_addr'];
    $m_work_err="";
    $hasError=false;

    if(isset($_POST['sub']))
    {
        if(empty($_POST['f_name']))
        {
            $hasError=true;
            $f_name_err="Filed Can Not Be Empty";
        }
        else{
            $f_name=$_POST['f_name'];
        }

        if(empty($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_err="NID Must Be Numaric";
        }
        else{
            $f_nid=$_POST['f_nid'];
        }

        if(empty($_POST['f_occupation']))
        {
            $hasError=true;
            $f_occupation_err="Filed Can Not Be Empty";
        }
        else{
            $f_occupation=$_POST['f_occupation'];
        }

        if(empty($_POST['f_work']))
        {
            $hasError=true;
            $f_work_err="Filed Can Not Be Empty";
        }
        else{
            $f_work=$_POST['f_work'];
        }


        if(empty($_POST['m_name']))
        {
            $hasError=true;
            $m_name_err="Filed Can Not Be Empty";
        }
        else{
            $m_name=$_POST['m_name'];
        }

        if(empty($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_err="NID Must Be Numaric";
        }
        else{
            $m_nid=$_POST['m_nid'];
        }

        if(empty($_POST['m_occupation']))
        {
            $hasError=true;
            $m_occupation_err="Filed Can Not Be Empty";
        }
        else{
            $m_occupation=$_POST['m_occupation'];
        }

        if(empty($_POST['m_work']))
        {
            $hasError=true;
            $m_work_err="Filed Can Not Be Empty";
        }
        else{
            $m_work=$_POST['f_work'];
        }

        if(!$hasError)
        {
            $query="UPDATE parents SET father_name='$f_name', father_nid='$f_nid', father_addr='$f_work', father_occu='$f_occupation', mother_name='$m_name', mother_nid='$m_nid', mother_addr='$m_work', mother_occu='$m_occupation' where id='$id'";
            $result=execute($query);
            if($result!=true)
            {
                print_r($result);
            }
        }
    }
?>