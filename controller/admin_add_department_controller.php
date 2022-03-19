<?php
class department
{
    function department()
        {

           if(isset($_POST['btn_save']))
                {
                    $na=$_POST['dept_name'];


        $sql="insert into tbl_department(dept_name) values('$na')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="admin_department_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$department=new department();
?>
