<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : GradientBlack   
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111121

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Janela de Idéias</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">janela de idéias</a></h1>
				<p>Coisinha linda tá cansada?</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="backoffice">Backoffice</a></li>
			<li><a href="producto">Producto</a></li>
			<li><a href="contactos">Contactos</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="post">
					<h3><a href="#">Login</a></h3><hr/>
					<div>
						<?php
							include 'lib.php';
							$db_name="janeladeideias"; // Database name 
							$tbl_name="utilizadores"; // Table name
							
							// Connect to server and select databse.
							mysql_select_db("$db_name")or die("cannot select DB");
							
							// username and password sent from form 
							$user=$_POST['user']; 
							$pword=$_POST['pword'];
							
							// To protect MySQL injection (more detail about MySQL injection)
							$user = stripslashes($user);
							$pword = stripslashes($pword);
							
							$user = mysql_real_escape_string($user);
							$pword = mysql_real_escape_string($pword);
							
							$sql="SELECT * FROM $tbl_name WHERE name='$user' and pword='$pword'";
							$result=mysql_query($sql);
							
							// Mysql_num_row is counting table row
							$count=mysql_num_rows($result);
							// If result matched $myusername and $mypassword, table row must be 1 row
							
							if($count==1){
							// Register $myusername, $mypassword and redirect to file "login_success.php"
							session_register("user");
							session_register("pword"); 
							header("location: backoffice");
							}
							else {
							echo "Wrong Username or Password";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Clarice Hughes</p>
</div>
<!-- end #footer -->
</body>
</html>
