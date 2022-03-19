<?php
class subject
{
    function subject()
        {

           if(isset($_POST['btn_save']))
                {
                    $course_id=$_POST['course_id'];
                    $sem_id=$_POST['sem_id'];
                    $na=$_POST['subject_name'];




        $sql="insert into tbl_subject(course_id,sem_id,subject_name) values('$course_id','$sem_id','$na')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="hod_subject_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$subject=new subject();
?>
