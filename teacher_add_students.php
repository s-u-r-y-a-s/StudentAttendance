<?php include_once("teacher_header.php");
include_once("lib/init.php");
include_once("function.php");
 ?>
<?php 
$faculty_id=$_SESSION['reg_id'];
$dept_id=getdeptByFId($faculty_id);


?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<h3 class="form-head"> Add Students</h3>

    <form action="#" method="post">
<table class="form_table">
 <tr>
  <td>Choose Course:</td>
  <div class="form_element" data-validate="course_id">
<td>
<select name="course_id" class="form_element">
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
<select name="sem_id" class="form_element">
    <option>-Select-</option>
     <?php $result=getallsemester();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

<tr>
   <td>Name</td>
    <td><input type="text" name="name" class="form_element" id="nam" required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
    <td>Address</td>
 <td><textarea name="address" class="form_element" required data-validation-error-msg="* Address required"></textarea></td>
</tr>

<tr>
    <td>Enrollment No</td>
    <td><input type="text" name="enrollment_no" class="form_element"  maxlength="10"  required data-validation-error-msg="* Address required"></td>

</tr>

    <tr>
    <td>Admission Date</td>
    <td><input type="date" name="admission_date" class="form_element"  required pattern="[0-9]{12}" minlength="12" maxLength="12" /></td>
</tr>


        <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          <input type="button" name="btn_back" class="form_button" value="Back" onclick="window.location.href='teacher_students_view_management.php'"/> </td>

        </tr>
</table>
</form>

    </div>


 <?php include_once ("teacher_right_side.php"); ?>

<?php include_once ("teacher_footer.php"); ?>
