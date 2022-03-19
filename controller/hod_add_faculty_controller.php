<?php
class faculty
{
    function faculty()
        {

            if(isset($_POST['btn_save']))
                {
                    $dept_id=$_POST['dept_id'];
                    $na=$_POST['name'];
                    $address=$_POST['address'];
                    $qualification=$_POST['qualification'];
                    $mob_no=$_POST['mobile_no'];
                    $adhaar=$_POST['adhaar'];
                    $email=$_POST['email'];
                    $dob=$_POST['dob'];
                    $dof=$_POST['date_of_join'];


                    $sql="insert into tbl_faculty(dept_id,name,address,qualification,mobile_no,adhaar,email,dob,date_of_join)
                        values('$dept_id','$na','$address',' $qualification','$mob_no','$adhaar','$email','$dob','$dof')";

                        $result= mysql_query($sql);
                        if($result)
                            {

                                $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
                                $password = $na.$s;
                                $reg_id = mysql_insert_id();
                                $type = 'teacher';
                                $sql1 = "insert into tbl_login(reg_id,username,password,type) values('$reg_id','$email','$password','$type' )";
                                $res = mysql_query($sql1);


                                echo "<script> alert ('Record added Successfully')</script>";
                                echo '<script>window.location="hod_faculty_management.php"; </script>';
                            }
                            else
                            {
                                echo "<script> alert ('Record not inserted')</script>";
                            }
                }
        }
    }
$faculty=new faculty();
?>
