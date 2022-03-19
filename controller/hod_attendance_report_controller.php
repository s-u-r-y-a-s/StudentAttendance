<?php
class attend_mark
{
		function attend_mark()
		{
			if(isset($_POST['search']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='hod_view_report.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$att_mark=new attend_mark;
?>