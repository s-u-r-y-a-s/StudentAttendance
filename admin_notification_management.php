
<?php include_once ("admin_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>
<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_notification where not_id='$id'");
   if($res)
   {
    echo '<script>window.location="admin_notification_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="admin_notification_management.php"; </script>';
 }
}?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">

        <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>


<h3 class="form-head">Add Notifications</h3>

    <form action="#" method="post">
<table class="form_table">
<tr>
  <td>Notification:</td>
  <td><textarea type="text" name="notification" class="form_element"  required data-validation-error-msg="* Name required"/></textarea> </td>

</tr>

<tr>
    <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          </td>

        </tr>
</form>
</table>


<!-- ######################################################## VIEW ################################################### -->

<h3 class="form-head">Notification Management</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Matter</th>
    <th>Date</th>
    <th>Action</th>
  </tr>

 <?php $result=getnotification();while($row=mysql_fetch_array($result)){ ?>

  <tr>
   <td><?php echo $row[1]; ?></td>
   <td><?php echo $row[2]; ?></td>

<td>
    <input type="hidden" name="not_id" value="<?php echo $row[0]; ?>"/>
        <a href="admin_notification_management.php?id=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>


    </div>


<?php include_once ("admin_right_side.php"); ?>


<?php include_once ("admin_footer.php"); ?>
