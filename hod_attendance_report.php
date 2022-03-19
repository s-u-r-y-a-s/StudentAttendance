<?php include_once("hod_header.php");
include_once("lib/init.php");
include_once("function.php");
?>
<?php

$hod_id=$_SESSION['reg_id'];

$dept_id=getdeptByHODId($hod_id);

?>


<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<h3 class="form-head">Attendance Report <h3>

    <form action="#" method="post">
<table class="form_table">

  <tr>
  <td>Choose Course:</td>
  <div class="form_element" data-validate="course_id">
<td>
<select name="course_id" id="csid" class="form_element">
    <option>-Select-</option>
     <?php $result=getcourse_ByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

<tr>
  <td>Choose Semester:</td>
  <div class="form_element" data-validate="sem_id">
<td>
<select name="sem_id" id="sid" class="form_element">
    <option>-Select-</option>
     <?php $result=getallsemester();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

        <td>
		<input type="submit" name="search" onclick="search()" class="form_button" value="GO">
 </td>

        </tr>
</table>
</form>
<table id="dis_table">

</table>
</form>

    </div>


 <?php include_once ("hod_right_side.php"); ?>
<?php include_once ("hod_footer.php"); ?>


