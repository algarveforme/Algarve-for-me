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
<title>Janela de Idéias - Backoffice</title>
<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		<link type="text/css" href="../jquery/css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="../jquery/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../jquery/js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
		<style type="text/css">
			/*demo page css*/
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">BackOffice</a></h1>
				<p>cliente: <a href="http://www.janeladeideias.com/">Janela de Idéias</a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="../">Homepage</a></li>
			<li class="current_page_item"><a href="./">Backoffice</a></li>
			<li><a href="../producto">Producto</a></li>
			<li><a href="../contactos">Contactos</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="post">
					<div id="accordion">
						<div>
							<h3><a href="#">Inserir Producto</a></h3>
								<div>
									<?php
										include '../lib.php';
										if (!$con)
										  {
										  die('Could not connect: ' . mysql_error());
										  }
										
										mysql_select_db("janeladeideias", $con);
										
										
										// sent from form 
										$product=$_POST['product'];
										$price=$_POST['price'];
										$elb_photo1=$_POST['elb_photo1'];
										$elb_photo2=$_POST['elb_photo2'];
										$des_en=$_POST['des_en'];
										$des_pt=$_POST['des_pt'];
										$des_fr=$_POST['des_fr'];
										$des_es=$_POST['des_es'];
										$des_de=$_POST['des_de'];
										
										
										$sql="INSERT INTO elenco (ele_product, ele_des_en, ele_des_pt, ele_des_fr, ele_des_es, ele_des_de, ele_price) VALUES ('$product', '$des_en', '$des_pt', '$des_fr', '$des_es', '$des_de', '$price')"; 
										$sql1="INSERT INTO elenco_blob (elb_photo1, elb_photo2) VALUES ('$elb_photo1', '$elb_photo2')";
										
										if (!mysql_query($sql,$con))
										  {
										  die('Error: ' . mysql_error());
										  }
										  
										if (!mysql_query($sql1,$con))
										  {
										  die('Error: ' . mysql_error());
										  }
										  
										 // inicio do formulário para fotos 
										echo "$product inserido com sucesso!<br/><a href='./' style='background-color: transparent; font-size: 22px; font-family: Georgia; float: right;'>Inserir novo producto</a>";
										
										mysql_close($con)
										
									?>
							</div>
						</div>
						<div>
							<h3><a href="#">Listar Producto</a></h3>
							<div>
								<?php
									include '../lib.php';
									if (!$con)
									  {
									  die('Could not connect: ' . mysql_error());
									  }
									
									mysql_select_db("janeladeideias", $con);
									
									$sql3="SELECT * FROM elenco";
									$query = mysql_query($sql3); 
									
									while($sql3 = mysql_fetch_array($query)){ 
										$ele_product = $sql3["ele_product"]; 
										$ele_id = $sql3["ele_id"]; 
										$ele_id = $sql1["elb_photo2"]; 
									
										echo "$ele_id - $ele_product<br/>";
									}         
									
									mysql_close($con)
								
								?>
							</div>
						</div>
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
