<?php
class update_attendance
{
    function update_attendance()
        {

           if(isset($_POST['btn_save']))
                {
                    $student_id=$_POST['student_id'];
                    $date=$_POST['adate'];
                    $class_time_id=$_POST['class_time_id'];
                    $attendance=$_POST['attendance'];
					$reg_id = $_SESSION['reg_id'];
					$sub_id=$_POST['sub_id'];


        $sql="insert into tbl_hourly_attendance(student_id,teacher_id,date,class_time_id,attendance,subject_id)
                values('$student_id','$reg_id','$date','$class_time_id','$attendance','$sub_id')";


                    $result=mysql_query($sql);

    if($result)
    {

                echo "<script> alert ('Record added Successfully')</script>";

                echo '<script>window.location="teacher_attendance_selection.php"; </script>';
            }
        else
            {
                echo "<script> alert('Record not Inserted')</script>";
                echo '<script>window.location="teacher_home.php"; </script>';
            }

                }
        }
    }
$update_attendance=new update_attendance();
?>
