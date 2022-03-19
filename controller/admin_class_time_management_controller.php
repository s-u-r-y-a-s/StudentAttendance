<?php
class class_time
{
    function class_time()
        {

           if(isset($_POST['btn_save']))
                {
                    $st=$_POST['start_time'];
                    $et=$_POST['end_time'];



        $sql="insert into tbl_class_time(start_time,end_time) values('$st','$et')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="admin_class_time_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$class_time=new class_time();
?>
