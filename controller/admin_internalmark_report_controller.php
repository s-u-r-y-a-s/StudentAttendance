<?php
class admin_internal_mark
{
		function admin_internal_mark()
		{
			if(isset($_POST['search']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='admin_view_report.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$intern=new admin_internal_mark;
?>