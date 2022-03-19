
<?php include_once ("admin_header.php");

include_once("lib/init.php");
include_once("function.php");  ?>

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_course where course_id='$id'");
   if($res)
   {
    echo '<script>window.location="admin_course_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="admin_course_management.php"; </script>';
 }
}?>


<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<h3 class="form-head">Add Courses</h3>

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
  <td>Course Name:</td>
  <td><input type="text" name="course_name" class="form_element" id="nam" required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
  <td>No of Semester:</td>
  <td><input type="text" name="no_of_semester" class="form_element" id="nam" required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
  <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />
</td>

        </tr>
</table>
</form>


<!-- ####################################################### VIEW ###################################################-->

<h3 class="form-head">Course Management</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Department Name</th>
    <th>Course Name</th>
    <th>No of Semester</th>
    <th>Action</th>
  </tr>
  <?php $result=getcourse();while($row=mysql_fetch_array($result)){ ?>

  <tr>
   <td><?php echo $row[4]; ?></td>
   <td><?php echo $row[0]; ?></td>
   <td align="center"><?php echo $row[1]; ?></td>
<td>
    <input type="hidden" name="course_id" value="<?php echo $row[5]; ?>"/>
        <a href="admin_course_management.php?id=<?php echo $row[5]; ?>&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>

    </div>

 <?php include_once ("admin_right_side.php"); ?>

<?php include_once ("admin_footer.php"); ?>
