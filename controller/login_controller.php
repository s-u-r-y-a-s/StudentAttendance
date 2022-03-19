<?php

class login
{
 function login()
    {

if(isset($_POST['btn_login']))
{

    $uname=$_POST['username'];
    $pw=$_POST['password'];

include_once("../lib/init.php");

    $qry="select * from tbl_login where username='".$uname."' and password='".$pw."'";


    $sql=mysql_query($qry);


   $result=mysql_fetch_array($sql);

    if($result)

    {
               $ut=$result['type'];

               $regid=$result['reg_id'];

               $_SESSION['reg_id']=$regid;

                  if($ut=='admin')
                   {

                    echo '<script>window.location="../admin_home.php"; </script>';
                     }
                      elseif($ut=='hod')
                     {
                    echo '<script>window.location="../hod_home.php"; </script>';
                      }
                   elseif($ut=='teacher')
                     {
                    echo '<script>window.location="../teacher_home.php"; </script>';
                      }


    }
    else{
       echo "<script> alert('Invalid username or password ...')</script>";
	  echo '<script>window.location="../index.php"; </script>';

       }

}


}


}

$login= new login();
?>
