
<?php include_once ("teacher_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>

<?php include_once ("body.php"); ?>

<?php 
$faculty_id=$_SESSION['reg_id'];

$course_id=$_GET['id'];

$result1=course($course_id);

$row2=mysql_fetch_array($result1);

$sem_id=$_GET['sem'];

$result=sem($sem_id);

$row1=mysql_fetch_array($result);
?>


<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<!-- ###################################################################################################################### -->

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_hourly_attendance where h_attendance_id='$id'");
   if($res)
   {
    echo '<script>window.location="teacher_attendance_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="teacher_attendance_management.php"; </script>';
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

<h3 class="form-head">Attendance Management</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->
<h4 class="form-head"><?php echo $row2[1]; ?>  <?php echo $row1[1]; ?></h4> 



<table class="form_table">
  <tr>
    <th>Date</th>
   	<th>SubjectName</th>
    <th>ClassTime</th>
    <th>StudentName</th>
    <th>Attendance</th>
    <th>Action</th>
  </tr>

 <?php $result=gethourlyattendanceByFId($faculty_id,$course_id,$sem_id);while($row=mysql_fetch_array($result)){ ?>

  <tr>
    	<td><?php echo $row[3]; ?></td>
        <td><?php echo $row[17]; ?></td>
        <td><?php echo $row[14]; ?> to <?php echo $row[15]; ?></td>
        <td><?php echo $row[8]; ?></td>
        <td><?php echo $row[5]; ?></td>
      
<td>
    <input type="hidden" name="h_attendance_id" value="<?php echo $row[0]; ?>"/>
        <a href="teacher_attendance_management.php?id=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>

</table>
  </div>


<?php include_once ("teacher_right_side.php"); ?>


<?php include_once ("teacher_footer.php"); ?>
