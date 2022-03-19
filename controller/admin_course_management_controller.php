<?php
class course
{
    function course()
        {

           if(isset($_POST['btn_save']))
                {
                    $na=$_POST['course_name'];
                    $sem=$_POST['no_of_semester'];
                    $dept_id=$_POST['dept_id'];


        $sql="insert into tbl_course(course_name,no_of_semester,dept_id) values('$na','$sem','$dept_id')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="admin_course_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$course=new course();
?>
