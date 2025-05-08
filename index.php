<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/CSS_L2P2/header.css">
	<link rel="stylesheet" type="text/css" href="CSS/CSS_L2P2/index.css">

</head>
<body>
	<div><?php include("componentes/header.html")?></div><!--Incrustar header-->

	<div><?php include("componentes/jumbotron.html")?></div><!--Incrustar jumbotron-->


	<div class="container"><!--Inicio contenedor-->

		<div class="row"><!--Inicio sección-->

			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><!--Inicio contenedor izquierdo-->

				<div class="panel panel-primary"><!--Inicio panel-->
					<div class="panel-heading"><!--Inicio titulo-->
						<h3 class="panel-title">
							<?php include("componentes/bar-title-products.html")?><!--incrustar titulo del panel-->
						</h3>
					</div><!--Fin panel-->
					<div class="panel-body">
						Panel content
					</div>
				</div><!--Fin panel-->
				
			</div><!--Fin contenedor izquierdo-->

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><!--Inicio contenedor derecho-->
				
				<div class="panel panel-primary"><!--Inicio panel-->
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div><!--Fin panel-->

			</div><!--Fin contenedor derecho-->

		</div><!--Fin sección-->

	</div><!--Fin contenedor-->
</body>
</html>