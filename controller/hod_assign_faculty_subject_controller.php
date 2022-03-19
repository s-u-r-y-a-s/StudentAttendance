<?php
class Assign_Subject
{
    function Assign_Subject()
        {

            if(isset($_POST['btn_save']))
                {
                    $faculty_id=$_POST['faculty_id'];
                    $subject_id=$_POST['subject_id'];


         $sqlcheck="select * from tbl_faculty_subject where subject_id=$subject_id";           
					
					$res=mysql_query($sqlcheck);
					
					$row=mysql_fetch_array($res);
					
					if($row[2]==$subject_id)
					{
						echo "<script> alert ('Duplicate entry : Already assigned subject')</script>";	
					}
					else
					{
					$sql="insert into tbl_faculty_subject(faculty_id,subject_id)
                        values('$faculty_id','$subject_id')";

                        $result= mysql_query($sql);
                        if($result)
                            {

                                echo "<script> alert ('Record added Successfully')</script>";
                                echo '<script>window.location="hod_assign_faculty_subject.php"; </script>';
                            }
                            else
                            {
                                echo "<script> alert ('Record not inserted')</script>";
                            }
                }
				}
        }
    }
$Assign_Subject=new Assign_Subject();
?>
