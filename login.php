<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM admin WHERE username='$myusername' and passcode='$mypassword'";
$result=pg_query($db,$sql);
$row=pg_fetch_array($result, NULL, PGSQL_ASSOC);
$count=pg_num_rows($result);

?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Login</title>	
	<meta http-equiv="content-type" content="text/html:charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap2.min.css">
	<link rel="stylesheet" href="style.css">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

</head>

<body>
	
	<nav id="navMenu"></nav>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div id="wrapper" class=""></div>
		<div id="sidebar-wrapper">
		    <ul class="sidebar-nav">
		        <div id="sidebar_admin"></div>
		    </ul>
		</div>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row"></div>
					<div class="col-lg-12">
						<form name="sub1" method="POST" action="">
							<fieldset style="width:50;">
								<div class="container-fluid" style="width:300px;height:180px;">
									<div class="container-fluid" >
										<img class="img-responsive" src="usuario.png" alt="">
									</div>
									<br><br><label for="username">Usuario</label>
									<input type="text" class="form-control" id="user" name="username">
									<label for="password">Contraseña</label>
									<input type="password" class="form-control" name="password"><br>
									<input class="btn btn-default" type="submit" name="login" value="Login">
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Navigation bar -->
	<script src="nav.js"></script>

	<!-- Sidebar -->
	<script src="sidebar_admin.js"></script>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>


</html>