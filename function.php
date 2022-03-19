<?php
include_once("lib/init.php");



function getalldepartment()
{
    $sql="select * from tbl_department";

    $res=mysql_query($sql);
    return $res;

}


function getallhod()
{
    $sql="select * from tbl_hod";

    $res=mysql_query($sql);
    return $res;

}

function gethod()
{
 $sql = "select h.dept_id,h.name,h.qualification,h.mobile_no,h.email,h.date_of_join,d.dept_id,d.dept_name,h.hod_id from tbl_hod h
            join tbl_department d on d.dept_id = h.dept_id";

            $res = mysql_query($sql);

    return $res;
}



function getallsemester()
{
    $sql="select * from tbl_semester";
    $res=mysql_query($sql);
    return $res;
}


function getnotification()
{
    $sql="select * from tbl_notification";
    $res=mysql_query($sql);
    return $res;
}

function getcourse()
{
    $sql="select c.course_name,c.no_of_semester,c.dept_id,d.dept_id,d.dept_name,c.course_id from tbl_course c
          join tbl_department d on d.dept_id = c.dept_id";
    $res=mysql_query($sql);
    return $res;
}


function getallcourse()
{
    $sql="select * from tbl_course";

    $res=mysql_query($sql);
    return $res;

}


function getsubject()
{
    $sql="select su.subject_id,su.course_id,su.sem_id,su.subject_name,c.course_id,c.course_name,se.sem_id,se.sem_name from tbl_subject su
          inner join tbl_course c on c.course_id = su.course_id
          inner join tbl_semester se on se.sem_id = su.sem_id";

    $res=mysql_query($sql);
    return $res;

}

function getfaculty()
{
    $sql="select f.faculty_id,f.dept_id,f.name,f.qualification,f.mobile_no,f.date_of_join,f.email,d.dept_id,d.dept_name from tbl_faculty f
          join tbl_department d on d.dept_id = f.dept_id";

    $res=mysql_query($sql);
    return $res;

}


function getstudents()
{
    $sql="select stu.stud_id,stu.name,stu.course_id,stu.sem_id,stu.enrollment_no,stu.address,stu.admission_date,se.sem_id,se.sem_name,
          c.course_id,c.course_name from tbl_student stu inner join tbl_course c on c.course_id = stu.course_id
          inner join tbl_semester se on se.sem_id = stu.sem_id";

    $res=mysql_query($sql);
    return $res;

}


function getallfaculty()
{
    $sql="select * from tbl_faculty";

    $res=mysql_query($sql);
    return $res;

}


function getallsubject()
{
    $sql="select * from tbl_subject";

    $res=mysql_query($sql);
    return $res;

}


function getfacultysubject()
{
    $sql="select fs.faculty_subject_id,fs.faculty_id,fs.subject_id,f.faculty_id,f.name,su.subject_id,su.subject_name from tbl_faculty_subject fs
          inner join tbl_faculty f on f.faculty_id= fs.faculty_id
          inner join tbl_subject su on su.subject_id = fs.subject_id";

    $res=mysql_query($sql);
    return $res;

}


function getcomplaints()
{
    $sql="select co.complaint_id,co.student_id,co.complaint,co.date,co.status,stu.student_id,stu.name from tbl_complaints co
          join tbl_student stu on stu.student_id = co.student_id";

    $res=mysql_query($sql);
    return $res;

}

function checkcomplaintbyid($reg_id)
{
    $sql="select * from tbl_complaints where student_id =$reg_id";

    $res=mysql_query($sql);
    return $res;

}

function getallclasstime()
{
    $sql="select * from tbl_class_time";

    $res=mysql_query($sql);
    return $res;

}

function getallstudents()
{
    $sql="select * from tbl_student";

    $res=mysql_query($sql);
    return $res;

}

function gethourlyattendance()
{
    $sql="select ha.h_attendance_id,ha.student_id,ha.teacher_id,ha.date,ha.class_time_id,ha.attendance,stu.stud_id,stu.name,
            f.faculty_id,f.name,clt.class_time_id,clt.start_time,clt.end_time,fs.faculty_id,fs.subject_id,su.subject_id,su.subject_name
            from tbl_hourly_attendance ha
            inner join tbl_student stu on stu.stud_id = ha.student_id
            inner join tbl_faculty f on f.faculty_id = ha.teacher_id
            inner join tbl_class_time clt on clt.class_time_id = ha.class_time_id
            inner join tbl_faculty_subject fs on fs.faculty_id = f.faculty_id
            inner join tbl_subject su on su.subject_id = fs.subject_id";

    $res=mysql_query($sql);
    return $res;

}
function getStudByCsSem($course_id,$sem)
{
	$sql="select * from tbl_student where sem_id = '$sem' and course_id = '$course_id'";
	//die($sql);
    $res=mysql_query($sql);
    return $res;
}
function get_student_present($stud_id)
{
	$sql="select count(attendance) from tbl_hourly_attendance where student_id = $stud_id and attendance = 'true'";
	//die($sql);
    $res=mysql_query($sql);
	$result=mysql_fetch_array($res);
    return $result;	
}
function get_student_absent($stud_id)
{
	$sql="select count(attendance) from tbl_hourly_attendance where student_id = $stud_id and attendance = 'false'";
	//die($sql);
    $res=mysql_query($sql);
	$result=mysql_fetch_array($res);
    return $result;	
}
function get_student_imark($present,$total)
{
	$percent=($present/$total)*100;
	$imark=5*($percent/100);
	return $imark;
}
function getdept_ById($hod_id)
{
	$sql="select *,d.dept_id,d.dept_name from tbl_hod t inner join tbl_department d on t.dept_id=d.dept_id where t.hod_id =$hod_id";
    $res=mysql_query($sql);
	//$result=mysql_fetch_array($res);
    return $res;		
}
function getdept_ByFId($faculty_id)
{
	$sql="select *,d.dept_id,d.dept_name from tbl_faculty f inner join tbl_department d on f.dept_id=d.dept_id where f.faculty_id =$faculty_id";
    $res=mysql_query($sql);
	//$result=mysql_fetch_array($res);
    return $res;
}
function getallstudents_ById($reg_id)
{
	 $sql="select f.faculty_id,f.dept_id,s.stud_id,s.name,s.course_id,s.sem_id,c.course_id,c.dept_id,se.sem_id,se.sem_name from tbl_faculty f inner join tbl_course c on f.dept_id=c.dept_id inner join tbl_student s on c.course_id=s.course_id inner join tbl_semester se on s.sem_id=se.sem_id where f.faculty_id=$reg_id";

    $res=mysql_query($sql);
    return $res;
}
function getdeptById($hod_id)
{
$sql="select *,d.dept_id,d.dept_name from tbl_hod h inner join tbl_department d on h.dept_id=d.dept_id where h.hod_id=$hod_id";

    $res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	
    return $row[1];
}
function getcourse_ByDId($dept_id)
{
	$sql="select * from tbl_course where dept_id=$dept_id";

    $res=mysql_query($sql);
    return $res;
}
function getdeptByFId($faculty_id)
{
	$sql="select *,d.dept_id,d.dept_name from tbl_faculty f inner join tbl_department d on f.dept_id=d.dept_id where f.faculty_id=$faculty_id";

    $res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	
    return $row[1];
}
function getstudentsByCSId($course_id,$sem_id)
{
	 $sql="select stu.stud_id,stu.name,stu.course_id,stu.sem_id,stu.enrollment_no,stu.address,stu.admission_date,se.sem_id,se.sem_name,
          c.course_id,c.course_name from tbl_student stu inner join tbl_course c on c.course_id = stu.course_id
          inner join tbl_semester se on se.sem_id = stu.sem_id where stu.course_id=$course_id and stu.sem_id=$sem_id";

    $res=mysql_query($sql);
    return $res;

}
function get_studentAttendance($present,$total)
{
	
	$percent=($present/$total)*100;
	//$imark=5*($percent/100);
	return $percent;
}
function sem($sem_id)
{
	$sql="select *from tbl_semester where sem_id=$sem_id";

    $res=mysql_query($sql);
    return $res;
}
function course($course_id)
{
$sql="select *from tbl_course where course_id=$course_id";

    $res=mysql_query($sql);
    return $res;
}
function gethourlyattendanceByFId($faculty_id,$course_id,$sem_id)
{
	 /*$sql="select ha.h_attendance_id,ha.student_id,ha.teacher_id,ha.date,ha.class_time_id, ha.attendance,ha.subject_id, stu.stud_id,stu.name,stu.course_id,stu.sem_id,f.faculty_id,f.name,clt.class_time_id,clt.start_time,clt.end_time,fs.faculty_id,
	 fs.subject_id,su.subject_id,su.subject_name
            from tbl_hourly_attendance ha
            inner join tbl_student stu on stu.stud_id = ha.student_id
            inner join tbl_faculty f on f.faculty_id = ha.teacher_id
            inner join tbl_class_time clt on clt.class_time_id = ha.class_time_id
            inner join tbl_faculty_subject fs on fs.faculty_id = f.faculty_id
            inner join tbl_subject su on su.subject_id = ha.subject_id where ha.teacher_id=$faculty_id and (stu.course_id=$course_id and stu.sem_id=$sem_id)";*/


$sql="select ha.h_attendance_id,ha.student_id,ha.teacher_id,ha.date,ha.class_time_id, ha.attendance,ha.subject_id, stu.stud_id,stu.name,stu.course_id,stu.sem_id,f.faculty_id,f.name,clt.class_time_id,clt.start_time,clt.end_time, su.subject_id,su.subject_name
            from tbl_hourly_attendance ha
            inner join tbl_student stu on stu.stud_id = ha.student_id
            inner join tbl_faculty f on f.faculty_id = ha.teacher_id
            inner join tbl_class_time clt on clt.class_time_id = ha.class_time_id
            inner join tbl_subject su on su.subject_id = ha.subject_id where ha.teacher_id=$faculty_id and (stu.course_id=$course_id and stu.sem_id=$sem_id)";
			
    $res=mysql_query($sql);
    return $res;
}

function getsubjectByFId($faculty_id,$course_id,$sem_id)
{
	 $sql="select f.faculty_id,f.name,fs.faculty_id,fs.subject_id,su.subject_id,su.subject_name,su.course_id,su.sem_id
            from tbl_faculty f inner join tbl_faculty_subject fs on fs.faculty_id = f.faculty_id
            inner join tbl_subject su on su.subject_id = fs.subject_id where f.faculty_id=$faculty_id and(su.course_id=$course_id and su.sem_id=$sem_id)";

    $res=mysql_query($sql);
    return $res;
}
function getstudents_ByCSId($course_id,$sem_id)
{
	  $sql="select stu.stud_id,stu.name,stu.course_id,stu.sem_id from tbl_student stu where stu.course_id=$course_id and stu.sem_id=$sem_id";
	 $res=mysql_query($sql);
    return $res;  
}
function getdeptByHODId($hod_id)
{
$sql="select *,d.dept_id,d.dept_name from tbl_hod h inner join tbl_department d on h.dept_id=d.dept_id where h.hod_id=$hod_id";

    $res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	
	return $row[1];
}
function getsubjectByDId($dept_id)
{
	$sql="select su.subject_id,su.course_id,su.sem_id,su.subject_name,c.course_id,c.course_name,se.sem_id,se.sem_name,c.dept_id from tbl_subject su
          inner join tbl_course c on c.course_id = su.course_id
          inner join tbl_semester se on se.sem_id = su.sem_id where c.dept_id=$dept_id";

    $res=mysql_query($sql);
    return $res;
}
function getfacultyByDId($dept_id)
{
	  $sql="select f.faculty_id,f.dept_id,f.name,f.qualification,f.mobile_no,f.date_of_join,f.email,d.dept_id,d.dept_name from tbl_faculty f
          join tbl_department d on d.dept_id = f.dept_id where f.dept_id=$dept_id";

    $res=mysql_query($sql);
    return $res;
}
function getfacultysubjectByDId($dept_id)
{
	 $sql="select fs.faculty_subject_id,fs.faculty_id,fs.subject_id,f.faculty_id,f.name,f.dept_id,su.subject_id,su.subject_name from tbl_faculty_subject fs
          inner join tbl_faculty f on f.faculty_id= fs.faculty_id
          inner join tbl_subject su on su.subject_id = fs.subject_id where f.dept_id=$dept_id";
		  $res=mysql_query($sql);
   		  return $res;
		  
}