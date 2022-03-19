
<?php include_once ("hod_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>

<?php
	
	$hod_id=$_SESSION['reg_id'];
    $dept_id=getdeptById($hod_id); 
?>

<?php include_once ("body.php"); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">



<!-- ###################################################################################################################### -->

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_faculty where faculty_id='$id'");
   if($res)
   {
    $result=mysql_query("delete  from tbl_login where reg_id='$id' and type='teacher'");
	if($result)
	{	
	echo '<script>window.location="hod_faculty_management.php"; </script>';
   }
   }
 else
 {
 echo '<script>window.location="hod_faculty_management.php"; </script>';
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

<h3 class="form-head">Teachers Of The Department</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Name</th>
    <th>Qualification</th>
    <th>DeptName</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>JoiningDate</th>
    <th>Action</th>
  </tr>

 <?php $result=getfacultyByDId($dept_id);while($row=mysql_fetch_array($result)){ ?>

  <tr>
    <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3 ]; ?></td>
        <td><?php echo $row[8]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[5]; ?></td>

<td>
    <input type="hidden" name="faculty_id" value="<?php echo $row[0]; ?>"/>
        <a href="hod_faculty_management.php?id=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>


        <input type="button" name="btn_add" class="form_button" value="Add" onClick="window.location.href='hod_add_faculty.php'"/> </td>
       <form action="#" method="post">
</table>


    </div>


<?php include_once ("hod_right_side.php"); ?>


<?php include_once ("hod_footer.php"); ?>
