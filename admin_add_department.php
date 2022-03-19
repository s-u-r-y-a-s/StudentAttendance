
<?php include_once ("admin_header.php");
include_once("lib/init.php");
 ?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">


<h3 class="form-head">Department Management</h3>

    <form action="#" method="post">
<table class="form_table">
<tr>
  <td>Department Name:</td>
  <td><input type="text" name="dept_name" class="form_element"  required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
    <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          <input type="button" name="btn_back" class="form_button" value="Back" onclick="window.location.href='admin_department_management.php'"/> </td>

        </tr>
</form>
</table>


</div>

 <?php include_once ("admin_right_side.php"); ?>

<?php include_once ("admin_footer.php"); ?>
