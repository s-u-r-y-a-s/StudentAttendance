<?php
class imark
{
		function imark()
		{
			if(isset($_POST['search']))
			{
				$csid 	= $_POST['course_id'];
				$sem_id	= $_POST['sem_id'];
		
				
					echo "<script>window.location='teacher_view_report.php?id='+$csid+'&&sem='+$sem_id</script>";	
					echo '<script>alert("Success ");</script>';
				
			}
		}
}
$imark=new imark;
?>