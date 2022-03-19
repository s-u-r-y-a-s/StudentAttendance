
<?php include_once ("hod_header.php");

include_once("lib/init.php");
include_once("function.php"); ?>

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

<h3 class="form-head">Notifications</h3>
<!--  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p> -->

<table class="form_table">
  <tr>
    <th>Matter</th>
    <th>Date</th>
    
     </tr>

 <?php $result=getnotification();while($row=mysql_fetch_array($result)){ ?>

  <tr>
    <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2 ]; ?></td>

    </tr>
        <?php
}
?>
</table>


    </div>


<?php include_once ("hod_right_side.php"); ?>


<?php include_once ("hod_footer.php"); ?>
