<?php
	include 'connect.php';
	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
		$loggedIn = $_SESSION['user_name']; 
		$s_userID = $_SESSION['user_id'];
	}
	else {
		$loggedIn = 'Guest';
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Derek Olson's Home Page</title>
        <script src="../Bootstrap/js/jquery-2.0.3.js"></script>
        <script src="../Bootstrap/js/bootstrap.js"></script>
        <link rel="shortcut icon" href="../Images/Spiderman.ico"/>
        <link rel="stylesheet" type="text/css" href="../313.css" />
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css" />
        <style type="text/css"></style>
    </head>
    <body>
        <!-- Top Nav -->
        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Derek Olson's Home Page</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="assignments.html">Assignments</a></li>          
            </ul>
            <ul class="nav navbar-nav navbar-right">
		<li id="loggedin">Logged in as: <?php echo $loggedIn; ?></li>              
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
        <!-- End Top Nav -->