<?php
class notification
{
    function notification()
        {

           if(isset($_POST['btn_save']))
                {
                    $na=$_POST['notification'];
                    $date=date('Y-m-d');


        $sql="insert into tbl_notification(notification,date) values('$na','$date')";

                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="admin_notification_management.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="admin_home.php"; </script>';
            }

                }
        }
    }
$notification=new notification();
?>
