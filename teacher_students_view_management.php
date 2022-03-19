
<?php include_once ("teacher_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>

<?php
$faculty_id=$_SESSION['reg_id'];
$dept_id=getdeptByFId($faculty_id);

?>
<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<!-- ###################################################################################################################### -->


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

<h3 class="form-head">View Students</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->
<form action="teacher_students_management.php" method="post">

<table class="form_table">
  <tr>
    <td>Select Course</td>
    <td>
    <select name="course_id" class="form_element">
    <option>Select</option>
     <?php $result=getcourse_ByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>
    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
    <?php } ?>
    </select>
    </td>
 </tr>
 <tr>   
    <td>Select semester</td>
    <td>
    <select name="sem_id" class="form_element">
    <option>Select</option>
     <?php $result=getallsemester();while($row1=mysql_fetch_array($result)){ ?>
    <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
    <?php } ?>
    </select>
    </td>
 </tr>
 <tr></tr>
 <tr>
 <td></td>
 	<td><input type="submit" name="btn_save" value="Submit" class="form_button"/></td>
 </tr>      

</table>


</form>
  </div>


<?php include_once ("teacher_right_side.php"); ?>


<?php include_once ("teacher_footer.php"); ?>
