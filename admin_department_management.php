
<?php include_once ("admin_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>
<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="delete")
{
 $id=$_GET['id'];

   $res=mysql_query("delete  from tbl_department where dept_id='$id'");
   if($res)
   {
    echo '<script>window.location="admin_department_management.php"; </script>';
   }
 else
 {
 echo '<script>window.location="admin_department_management.php"; </script>';
 }
}?>

<?php if(isset($_REQUEST['action'])&&$_REQUEST['action']=="deletehod")
{
 $id1=$_GET['id1'];

   $res=mysql_query("delete from tbl_hod where hod_id='$id1'");
   if($res)
   {
    $result=mysql_query("delete from tbl_login where reg_id='$id1' and type='hod'");
	if($result)
	{
	echo '<script>window.location="admin_department_management.php"; </script>';
   }
   }
 else
 {
 echo '<script>window.location="admin_department_management.php"; </script>';
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

<h3 class="form-head">Departments</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Department Name</th>
     <th>Action</th>
  </tr>

 <?php $result=getalldepartment();while($row=mysql_fetch_array($result)){ ?>

  <tr>
   <td><?php echo $row[1]; ?></td>

<td>
    <input type="hidden" name="dept_id" value="<?php echo $row[0]; ?>"/>
        <a href="admin_department_management.php?id=<?php echo $row[0]; ?>&action=delete" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>

        <input type="button" name="btn_add" class="form_button" value="Add" onClick="window.location.href='admin_add_department.php'"/> </td>
       <form action="#" method="post">
</table>

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

<h3 class="form-head">Head Of The Department</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Name</th>
    <th>Qualification</th>
    <th>Department Name</th>
    <th>Mobile no</th>
    <th>Email</th>
    <th>Date of Joining</th>
    <th>Action</th>
  </tr>

 <?php $result=gethod();while($row=mysql_fetch_array($result)){ ?>

  <tr>
    <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2 ]; ?></td>
        <td><?php echo $row[7]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>

<td>
    <input type="hidden" name="hod_id" value="<?php echo $row[0]; ?>"/>
        <a href="admin_department_management.php?id1=<?php echo $row['hod_id']; ?>&action=deletehod" onClick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </td>
    </tr>
        <?php
}
?>
</table>


        <input type="button" name="btn_add" class="form_button" value="Add" onClick="window.location.href='admin_add_hod.php'"/> </td>
       <form action="#" method="post">



    </div>


<?php include_once ("admin_right_side.php"); ?>


<?php include_once ("admin_footer.php"); ?>
