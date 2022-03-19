
<?php include_once ("hod_header.php");

include_once("lib/init.php");
include_once("function.php");
 ?>
 <?php
	
	$hod_id=$_SESSION['reg_id'];
    $dept_id=getdeptById($hod_id); 
?>
<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<h3 class="form-head"> Assign Subjects To Teachers </h3>

    <form action="#" method="post">
<table class="form_table">

<tr>
  <td>Select Teachers:</td>
  <div class="form_element" data-validate="faculty_id">
<td>
<select name="faculty_id" class="form_element">
  <option>-Select-</option>
     <?php $result=getfacultyByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

<tr>
  <td>Select Subject:</td>
  <div class="form_element" data-validate="subject_id">
<td>
<select name="subject_id" class="form_element">
  <option>-Select-</option>
     <?php $result=getsubjectByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[3]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>


<tr>

        <td>
          <input type="Submit" name="btn_save" class="form_button" value="Save" />

          <input type="button" name="btn_back" class="form_button" value="Back" onClick="window.location.href='hod_faculty_management.php'"/> </td>

        </tr>
</table>
</form>



<!-- ########################################## VIEW ASSIGNED SUBJECTS ############################################## -->


<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id1=$_GET['id1'];

   $res=mysql_query("delete  from tbl_faculty_subject where faculty_subject_id='$id1'");
   if($res)
   {
    echo '<script>window.location="hod_assign_faculty_subject.php"; </script>';
   }
 else
 {
 echo '<script>window.location="hod_assign_faculty_subject.php"; </script>';
 }
}?>

        <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 10px solid #ddd;
}

th, td {
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<h3 class="form-head">Assigned Subjects To Teachers</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Teacher Name</th>
    <th>Subject Name</th>
	<th>Action</th>
  </tr>

 <?php $result=getfacultysubjectByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>

  <tr>
    <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[7]; ?></td>


<td>
    <input type="hidden" name="faculty_subject_id" value="<?php echo $row[0]; ?>"/>
        <a href="hod_assign_faculty_subject.php?id1=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>




    </div>

 <?php include_once ("hod_right_side.php"); ?>

<?php include_once ("hod_footer.php"); ?>
