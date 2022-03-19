
<?php include_once ("admin_header.php");

include_once("lib/init.php");
include_once("function.php");
 ?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<h3 class="form-head"> Assign Hod TO Departments</h3>

    <form action="#" method="post">
<table class="form_table">

<tr>
  <td>Choose Department:</td>
  <div class="form_element" data-validate="dept_id">
<td>
<select name="dept_id" class="form_element">
  <option>-Select-</option>
     <?php $result=getalldepartment();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>
<tr>
  <td>Name:</td>
  <td><input type="text" name="name" class="form_element" id="nam" required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
    <td>Address:</td>
 <td><textarea name="address" class="form_element" required data-validation-error-msg="* Address required"></textarea></td>
</tr>

<tr>
  <td>Qualification;</td>
  <td><input type="text" name="qualification" class="form_element"  required data-validation-error-msg="* Qualification required"/></td>

</tr>

<tr>
  <td>Mobile no:</td>
  <td><input type="text" pattern="[0-9]{10}" name="mobile_no" class="form_element"  required minlength="10" maxlength="10" data-validation-error-msg="* Mobile no required"/></td>

</tr>

<tr>
  <td>Adhaar:</td>
  <td><input type="text" pattern="[0-9]{12}" name="adhaar" class="form_element" minlength="12" maxlength="12"  required data-validation-error-msg="* Adhaar required"/></td>

</tr>

<tr>
  <td>Email:</td>
  <td><input type="text" name="email" class="form_element"  required data-validation-error-msg="* email required"/></td>

</tr>

<tr>
  <td>Date of Birth:</td>
<td><input id="date" type="date" name="dob" class="form_element"  maxlength="10" required data-validation-error-msg="* Date required"></td>

</tr>

<tr>
  <td>Date of join:</td>
    <td><input id="date" type="date" name="date_of_join" class="form_element"  maxlength="10" required data-validation-error-msg="* Date required"></td>

</tr>

<tr>

        <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          <input type="button" name="btn_back" class="form_button" value="Back" onclick="window.location.href='admin_department_management.php'"/> </td>

        </tr>
</table>
</form>

    </div>

 <?php include_once ("admin_right_side.php"); ?>

<?php include_once ("admin_footer.php"); ?>
