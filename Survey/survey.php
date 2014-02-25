<?php 

if($_COOKIE['voted'] == 'true')
        header('Location: http://dokinetix.com/Survey/results.php');

?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../313.css">
		<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
		<script src="../js/main.js"></script>
		<title>Survey</title>
    </head>
        <body class="background">
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
					  <li><a href="mailto:ols08020@byui.edu?Subject=You%20Deserve%20An%20A!" target="_blank" title="EeeeeeMaaaaaaail!">Email Derek</a></li>
					</ul>
				  </div><!-- /.navbar-collapse -->
				</nav>
				<!-- End Top Nav -->

				<!-- Begin Content -->
				<div class="dvMainContent border">
					<div class="col-md-8 col-md-offset-2 survey">
							<div class="row">
									<div class="surveyHeader">
											<hr class="head">
													Survey
											<hr class="head">
									</div>
							</div>
							<form action="process.php" method="post">
									<div class="row surveyQuestion">
											Have you ever gone hunting? 
											<div class="container">
													<div class="row">
														<div class="col-md-2 col-md-offset-1 surveyAnswer">
															<input type="radio" name="hunting" value="Yes">
															Yes<br/>
															<input type="radio" name="hunting" value="No">
															No
														<div>
													</div>
											</div>
									</div>
									<div class="row surveyQuestion">
											What is your favorite class in the CS program at BYU-Idaho?
											<div class="container">
													<div class="row">
															<div class="col-md-2 col-md-offset-1 surveyAnswer">
																	<input type="radio" name="cs" value="CS124">
																	CS124<br/>
																	<input type="radio" name="cs" value="CS213">
																	CS213
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="cs" value="CS313">
																	CS313<br/>
																	<input type="radio" name="cs" value="CS345">
																	CS345
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="cs" value="CS490">
																	CS490<br/>
																	<input type="radio" name="cs" value="CS499">
																	CS499
															</div>
													</div>
											</div>
									</div>
									<div class="row surveyQuestion">
											<!-- <div class="tooltip tooltip-left really">
											Do you really have a
											favorite data structure?
											</div> -->
											What is your favorite data structure?
											<div class="container">
													<div class="row">
															<div class="col-md-2 col-md-offset-1 surveyAnswer">
																	<input type="radio" name="data" value="Linked list">
																	Linked list<br/>
																	<input type="radio" name="data" value="Vector">
																	Vector
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="data" value="Array">
																	Array<br/>
																	<input type="radio" name="data" value="Map">
																	Map
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="data" value="Your own">
																	Your own<br/>
																	<input type="radio" name="data" value="None">
																	None
															</div>
													</div>
											</div>
									</div>
									<div class="row surveyQuestion">
											Do you know what it takes? 
											<div class="container">
													<div class="row">
															<div class="col-md-2 col-md-offset-1 surveyAnswer">
																	<input type="radio" name="know" value="Yes">
																	Yes<br/>
																	<input type="radio" name="know" value="No">
																	No
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="know" value="Maybe">
																	Maybe<br/>
																	<input type="radio" name="know" value="It takes something?">
																	It takes something?
															</div>
													</div>
											</div>
									</div>
									<div class="row surveyQuestion">
											How often are you wrong? 
											<div class="container">
													<div class="row">
															<div class="col-md-2 col-md-offset-1 surveyAnswer">
																	<input type="radio" name="right" value="Always">
																	Always<br/>
																	<input type="radio" name="right" value="Never">
																	Never
															</div>
															<div class="col-md-2 surveyAnswer">
																	<input type="radio" name="right" value="I am wrong right now">
																	I am wrong right now<br/>
																	<input type="radio" name="right" value="I ask others how it feels">
																	I ask others how it feels
															</div>
													</div>

											<div class="col-md-2 col-md-offset-1 surveyAnswer">
													<span> 
														<button type="button" class="btn btn-primary btn-md btn-block" onclick="results()">Results</button>
														<input type="submit" class="btn btn-primary btn-md btn-block"/>
													</span>
											</div>				
																						</div>									
									</div>
							</form>
					</div>
				</div>
				<!-- End Content -->

				<!-- Begin Footer 
				<footer class="footer well well-lg" id="footer">
				  <div class="container">
					<p class="muted credit"><a href="http://dokinetix.com/">DOKinetix.com</a></p>
				  </div>
				</footer>
				End Footer -->
        </body>
</html>