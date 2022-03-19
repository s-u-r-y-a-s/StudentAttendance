<?php
class complaint_reply
{
    function complaint_reply()
        {
            if(isset($_POST['btn_update']))
                {

                    $status=$_POST['status'];

                    $id = $_POST['complaint_id'];


            $sql="update tbl_complaints set status='$status' where complaint_id=$id";
            $result= mysql_query($sql);


                if($result)
                {
                    echo "<script> alert ('Record updated Successfully')</script>";
                    echo '<script>window.location="hod_complaint_management.php"; </script>';
                }
                else
                {
                    echo "<script> alert ('Record not inserted')</script>";

                }
            }
        }
    }
$complaint_reply=new complaint_reply();
?>
