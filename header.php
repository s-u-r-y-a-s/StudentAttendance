
<?php include_once("lib/init.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Students Attendance Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<!-- End Homepage Only Scripts -->
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Associate-level programs</h2>
        <p>Associate-level programs offer different degrees for a variety of careers. These 2-year programs may provide the necessary training to prepare students for entry-level positions in fields like nursing, graphic design, and other vocational areas. Associate degree programs are most commonly available from community colleges and technical schools.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>




      <div class="topbox last">
        <h2>Login Here</h2>
        <form action="controller/login_controller.php" method="POST">
          <fieldset>
            <legend>Login Form</legend>
            <label for="username">Username:
              <input type="text" name="username" id="username" value="" />
            </label>
            <label for="password">Password:
              <input type="password" name="password" id="password" value="" />
            </label>
            <label for="remember">
              <input class="checkbox" type="checkbox" name="remember" id="remember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="btn_login" id="login" value="Login" />
              &nbsp;
              <input type="reset" name="reset" id="reset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>


<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Students Attendance Management System</a></h1>
      <p></p>
    </div>

    <br class="clear" />
  </div>
</div>
