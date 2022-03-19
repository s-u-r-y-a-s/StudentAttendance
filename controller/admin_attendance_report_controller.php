<?php
class admin_attend_mark
{
		function admin_attend_mark()
		{
			if(isset($_POST['search']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='admin_view_attendance_report.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$att_mark=new admin_attend_mark;
?>