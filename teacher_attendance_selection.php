<?php include_once("teacher_header.php");
include_once("lib/init.php");
include_once("function.php");
//$reg_id = $_SESSION['reg_id'];
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

<h3 class="form-head"> Select Course and Semester</h3>

<form action="#" method="post">
<table class="form_table">

 <tr>
  <td>Choose Course:</td>
  <div class="form_element" data-validate="class_time_id">
<td>
<select name="course_id" class="form_element">
    <option>-Select-</option>
     <?php $result=getcourse_ByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </option>
  <?php } ?>
</select></td>
</div>
</tr>
 <tr>
  <td>Choose Semester:</td>
  <div class="form_element" data-validate="sem_id">
<td>
<select name="sem_id" id="sid" class="form_element">
    <option>-Select-</option>
     <?php $result=getallsemester();while($row=mysql_fetch_array($result)){ ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
  <?php } ?>
</select></td>
</div>
</tr>
 

<tr>
    <td>
          <input type="hidden" name="teacher_id" class="form_element" value="<?php echo $faculty_id; ?>" >
          <input type="Submit" name="btn_save" class="form_button" value="Update" />


          </td>

        </tr>

</table>
</form>

    </div>


 <?php include_once ("teacher_right_side.php"); ?>

<?php include_once ("teacher_footer.php"); ?>
