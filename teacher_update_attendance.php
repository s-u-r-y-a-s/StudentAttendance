<?php include_once("teacher_header.php");
include_once("lib/init.php");
include_once("function.php");
//$reg_id = $_SESSION['reg_id'];
 ?>
<?php
$course_id=$_GET['id'];

$sem_id=$_GET['sem'];

$faculty_id=$_SESSION['reg_id'];
//$dept_id=getdeptByFId($faculty_id);

?>


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

<h3 class="form-head"> Update Attendance</h3>

<form action="#" method="post">
<table class="form_table">

  
 <tr>
  <td>Choose Subject:</td>
  <div class="form_element" data-validate="class_time_id">
<td>
<select name="sub_id" class="form_element">
    <option>-Select-</option>
     <?php $result=getsubjectByFId($faculty_id,$course_id,$sem_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[4]; ?>"><?php echo $row[5]; ?> </option>
  <?php } ?>
</select></td>
</div>
</tr>

 <tr>
  <td>Choose Class Time:</td>
  <div class="form_element" data-validate="class_time_id">
<td>
<select name="class_time_id" class="form_element">
    <option>-Select-</option>
     <?php $result=getallclasstime();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> to <?php echo $row[2]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>

 <tr>
  <td>Select Student:</td>
  <div class="form_element" data-validate="student_id">
<td>
<select name="student_id" class="form_element">
    <option>-Select-</option>
     <?php $result=getstudents_ByCSId($course_id,$sem_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>
<tr>
	<td>Date</td>
    <td><input type="date" name="adate" value="" class="form_element"/></td>
</tr>
 <tr>
  <td>Attendance:</td>
  <div class="form_element" data-validate="Name is required">
<td>
<input  type="radio" name="attendance"  value="true"><font color="black">Present</font>
<input  type="radio" name="attendance"  value="false"><font color="black">Absent</font>

</div>
</tr>



<tr>
    <td>
          <input type="hidden" name="teacher_id" class="form_element" value="<?php echo $reg_id; ?>" >
          <input type="Submit" name="btn_save" class="form_button" value="Update" />


          </td>

        </tr>

</table>
</form>

    </div>


 <?php include_once ("teacher_right_side.php"); ?>

<?php include_once ("teacher_footer.php"); ?>
