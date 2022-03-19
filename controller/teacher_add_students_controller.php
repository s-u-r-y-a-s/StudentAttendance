<?php
class student_reg
{
    function student_reg()
        {

            if(isset($_POST['btn_save']))
                {
                    $na=$_POST['name'];
                    $address=$_POST['address'];
                    $enroll_no=$_POST['enrollment_no'];
                    $adm_date=$_POST['admission_date'];
                    $course_id=$_POST['course_id'];
                    $sem_id=$_POST['sem_id'];



                    $sql="insert into tbl_student(name,address,enrollment_no,admission_date,course_id,sem_id) values
                          ('$na','$address','$enroll_no','$adm_date','$course_id','$sem_id')";

                          $result= mysql_query($sql);
                           if($result)
                            {
                                echo "<script> alert ('Record added Successfully')</script>";
                                echo '<script>window.location="teacher_students_view_management.php"; </script>';
                            }
                            else
                            {
                                echo "<script> alert ('Record not inserted')</script>";
                            }
                }
        }
    }
$student_reg=new student_reg();
?>
