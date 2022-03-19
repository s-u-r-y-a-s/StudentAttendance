
<?php include_once ("teacher_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<!-- ###################################################################################################################### -->

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_student where stud_id='$id'");
   if($res)
   {
    echo '<script>window.location="teacher_students_view_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="teacher_students_view_management.php"; </script>';
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

<?php 

	if(isset($_POST['btn_save']))
       {
       $course_id=$_POST['course_id'];
	   
	   $sem_id=$_POST['sem_id'];

	   }


?>

<h3 class="form-head">Students Management</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Enroll.Number</th>
    <th>CourseName</th>
    <th>SemName  </th>
    <th>Action</th>
  </tr>

 <?php $result=getstudentsByCSId($course_id,$sem_id);while($row=mysql_fetch_array($result)){ ?>

  <tr>
    <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[5 ]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[10]; ?></td>
        <td><?php echo $row[8]; ?></td>

<td>
    <input type="hidden" name="stud_id" value="<?php echo $row[0]; ?>"/>
        <a href="teacher_students_management.php?id=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    
    </tr>
        <?php
}
?>

<tr>

	<td><a href="teacher_students_view_management.php"><input type="button" name="back" value="Back" class="form_button"/></a></td>
</tr>

        <input type="button" name="btn_add" class="form_button" value="Add" onClick="window.location.href='teacher_add_students.php'"/> </td>
       <form action="#" method="post">
</table>
  </div>


<?php include_once ("teacher_right_side.php"); ?>


<?php include_once ("teacher_footer.php"); ?>
