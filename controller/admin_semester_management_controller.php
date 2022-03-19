<?php
class semester
{
    function semester()
        {

           if(isset($_POST['btn_save']))
                {
                    $na=$_POST['sem_name'];


        $sql="insert into tbl_semester(sem_name) values('$na')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="admin_semester_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$semester=new semester();
?>
