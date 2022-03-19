<?php
class attendance_new
{
		function attendance_new()
		{
			if(isset($_POST['search']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='teacher_attendance_management.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$attendance=new attendance_new;
?>