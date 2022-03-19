<?php
class select_attendance
{
		function select_attendance()
		{
			if(isset($_POST['btn_save']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='teacher_update_attendance.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$sattend=new select_attendance;
?>