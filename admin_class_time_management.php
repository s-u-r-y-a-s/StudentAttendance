
<?php include_once ("admin_header.php");
include_once("lib/init.php");
include_once("function.php");

 ?>

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_class_time where class_time_id='$id'");
   if($res)
   {
    echo '<script>window.location="admin_class_time_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="admin_class_time_management.php"; </script>';
 }
}?>


<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">


<h3 class="form-head">Class Time Management</h3>

    <form action="#" method="post">
<table class="form_table">
<tr>
  <td>Start Time:</td>
  <td><input type="time" name="start_time" class="form_element"  required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
  <td>End Time:</td>
  <td><input type="time" name="end_time" class="form_element"  required data-validation-error-msg="* Name required"/></td>

</tr>

<tr>
    <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          <input type="button" name="btn_back" class="form_button" value="Back" onclick="window.location.href='admin_home.php'"/> </td>

        </tr>
</form>
</table>


<!-- ####################################################### VIEW ###################################################-->

<h3 class="form-head">Class Time Management</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Class Start Time</th>
    <th>Class End Time</th>
    <th>Action</th>
  </tr>
  <?php $result=getallclasstime();while($row=mysql_fetch_array($result)){ ?>

  <tr>
   <td><?php echo $row[1]; ?></td>
   <td><?php echo $row[2]; ?></td>
<td>
    <input type="hidden" name="class_time_id" value="<?php echo $row[0]; ?>"/>
        <a href="admin_class_time_management.php?id=<?php echo $row[0]; ?>&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>

    </div>

 <?php include_once ("admin_right_side.php"); ?>

<?php include_once ("admin_footer.php"); ?>
