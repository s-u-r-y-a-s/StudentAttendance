
<?php include_once ("hod_header.php");

include_once("lib/init.php");
include_once("function.php");
 ?>

<?php $id=$_GET['complaint_id'];

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


<h3 class="form-head">Send Reply</h3>

    <form action="#" method="post">
<table class="form_table">
<tr>
  <td>Reply:</td>
  <td><textarea type="text" name="status" class="form_element"  required data-validation-error-msg="* Name required"/></textarea> </td>

</tr>

<tr>
    <td>
          <input type="hidden" name="complaint_id" class="form_element" value="<?php echo $id; ?>" >
          <input type="Submit" name="btn_update" class="form_button" value="Send" />


          </td>

        </tr>
</form>
</table>


<!-- ######################################################## VIEW ################################################### -->


    </div>


<?php include_once ("hod_right_side.php"); ?>


<?php include_once ("hod_footer.php"); ?>
