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
				<p><a href="http://www.janeladeideias.com/">Janela de Idéias</a></p>
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
									<form action="new_product.php" method="post">
										<input type="text" id="product" name="product" value="Nome do producto" onclick="this.value='';">
										<input type="text" id="price" name="price" value="00,00" onclick="this.value='';"><br/><br/>

										<SCRIPT type="text/javascript">
										$(document).ready(function()
											{
											//switchsubmenu('%-preference.menu-%');
											$('#menutab-des_en-listen').click(function() { switchsubmenu('des_en'); return false; });
											$('#menutab-des_pt-listen').click(function() { switchsubmenu('des_pt'); return false; });
											$('#menutab-des_fr-listen').click(function() { switchsubmenu('des_fr'); return false; });
											$('#menutab-des_es-listen').click(function() { switchsubmenu('des_es'); return false; });
											$('#menutab-des_de-listen').click(function() { switchsubmenu('des_de'); return false; });
											});
										
										function switchsubmenu(menuid)
											{
											//hide all menu forms
											$('div.menutab-handle').each( function() {$(this).hide(); } );
											
											//switch off menu links highlight
											$('#submenu .current').each( function() {$(this).removeClass('current'); } );
											//switch on current only
											$('#menutab-' + menuid).show();
											//highlight menu link
											$('#menutab-' + menuid + '-listen').addClass('current');
											}
										</SCRIPT>
										<div id="tabsK">
										  <ul>
										    <li><a id="menutab-des_en-listen" href="#" title="des_en"><span>Description EN</span></a></li>
										    <li><a id="menutab-des_pt-listen" href="#" title="des_pt"><span>Description PT</span></a></li>
										    <li><a id="menutab-des_fr-listen" href="#" title="des_fr"><span>Description FR</span></a></li>
										    <li><a id="menutab-des_es-listen" href="#" title="des_es"><span>Description ES</span></a></li>
										    <li><a id="menutab-des_de-listen" href="#" title="des_de"><span>Description DE</span></a></li>
										  </ul>
										</div>

										<div id="menutab-des_en" class="menutab-handle" style="display:block;">
											<textarea rows="10" cols="118" id="des_en" name="des_en" onclick="this.value='';" style="font-size: 16px;">
												Description EN 
											</textarea><br/>
										</div>

										<div id="menutab-des_pt" class="menutab-handle" style="display: none;">
											<textarea rows="10" cols="118" id="des_pt" name="des_pt" onclick="this.value='';" style="font-size: 16px;">
												Description PT 
											</textarea><br/>
										</div>

										<div id="menutab-des_fr" class="menutab-handle" style="display: none;">
											<textarea rows="10" cols="118" id="des_fr" name="des_fr" onclick="this.value='';" style="font-size: 16px;">
												Description FR 
											</textarea><br/>
										</div>

										<div id="menutab-des_es" class="menutab-handle" style="display: none;">
											<textarea rows="10" cols="118" id="des_es" name="des_es" onclick="this.value='';" style="font-size: 16px;">
												Description ES 
											</textarea><br/>
										</div>

										<div id="menutab-des_de" class="menutab-handle" style="display: none;">
											<textarea rows="10" cols="118" id="des_de" name="des_de" onclick="this.value='';" style="font-size: 16px;">
												Description DE 
											</textarea><br/>
										</div><br/>
			
									<input type='file' name='elb_photo1' style="font-size: 14px;"><br/>
									<input type='file' name='elb_photo2' style="font-size: 14px;"><br/>
									<input type="submit" value="Gravar e inserir fotos" style="float: right;"><br/>
									</form>
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
									
									$sql="SELECT * FROM elenco";
									$query = mysql_query($sql); 
									
									while($sql = mysql_fetch_array($query)){ 
										$ele_product = $sql["ele_product"]; 
										$ele_id = $sql["ele_id"]; 
										
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
