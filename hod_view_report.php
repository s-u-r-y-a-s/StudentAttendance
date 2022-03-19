<?php include_once("hod_header.php");
include_once("lib/init.php");
include_once("function.php");

$course_id = $_GET['id'];
$sem = $_GET['sem'];
$result = getStudByCsSem($course_id,$sem);
?>


<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<h3 class="form-head"> View Attendance Report <h3>

    <form action="#" method="post">
<table class="form_table">
<tr>
<th>Name</th>
<th>Present</th>
<th>Absent</th>
<th>Working days</th>
<th>Attendance % </th>
</tr>
  <?php while($row = mysql_fetch_array($result))
  {
	  
?>
<tr>
<td><?php echo $row[1]; ?></td>
<?php $present=get_student_present($row[0]); ?>
<td align="center"><?php echo $present[0]; ?></td>
<?php $abs=get_student_absent($row[0]); ?>
<td align="center"><?php echo $abs[0]; ?></td>
<?php 
$total=$present[0]+$abs[0];
?>
<td align="center"><?php echo $total; ?></td>
<?php $attend_percent=get_studentAttendance($present[0],$total); ?>
<td align="center"><?php echo $attend_percent; ?></td>
</tr>
  <?php }  ?>
  
  
</table>
</form>
<table id="dis_table">

</table>
</form>

    </div>


 <?php include_once ("hod_right_side.php"); ?>
<?php include_once ("hod_footer.php"); ?>


