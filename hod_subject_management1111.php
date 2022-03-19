
<?php include_once ("hod_header.php");

include_once("lib/init.php");
include_once("function.php");  ?>

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_subject where subject_id='$id'");
   if($res)
   {
    echo '<script>window.location="admin_subject_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="admin_subject_management.php"; </script>';
 }
}?>


<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<h3 class="form-head">Add Subject</h3>

    <form action="#" method="post">
<table class="form_table">

<tr>
  <td>Choose Course:</td>
  <div class="form_element" data-validate="course_id">
<td>
<select name="course_id">
   <option>-Select-</option>
     <?php $result=getallcourse();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

<tr>
  <td>Choose Semester:</td>
  <div class="form_element" data-validate="sem_id">
<td>
<select name="sem_id">
   <option>-Select-</option>
     <?php $result=getallsemester();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

<tr>
  <td>Subject Name:</td>
  <td><input type="text" name="subject_name" class="form_element" id="nam" required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
  <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />
</td>

        </tr>
</table>
</form>


<!-- ####################################################### VIEW ###################################################-->

<h2>Subject Management</h2>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table>
  <tr>
    <th>Course Name</th>
    <th>Semester Name</th>
    <th>Subject Name</th>
  </tr>
  <?php $result=getsubject();while($row=mysql_fetch_array($result)){ ?>

  <tr>
   <td><?php echo $row[5]; ?></td>
   <td><?php echo $row[7]; ?></td>
   <td><?php echo $row[3]; ?></td>
<td>
    <input type="hidden" name="subject_id" value="<?php echo $row[0]; ?>"/>
        <a href="hod_subject_management.php?id=<?php echo $row[0]; ?>&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>

    </div>

 <?php include_once ("hod_right_side.php"); ?>

<?php include_once ("hod_footer.php"); ?>
