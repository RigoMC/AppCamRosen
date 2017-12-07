<!DOCTYPE html>
<html lang="en">

  <head>
  
	<!--<meta http-equiv="Expires" content="0">
	
	<meta http-equiv="Last-Modified" content="0">-->
 
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	
	<!--<meta http-equiv="Pragma" content="no-cache">-->
	
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Credencialización Rosenblueth</title>

    <!--Icono pestaña -->
    <link rel="shortcut icon" href="img/favico.ico" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <style type="text/css">
      html,body{
        margin:0px;
        height:100%;
      }
    </style>
	
	<!--link fuente roboto Google-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!--font Awesome-->
	<script src="https://use.fontawesome.com/ed0a4c9bce.js"></script>
	<!-- link bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	<!-- link a API para jquery  
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>-->
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!--SCRIPTS PARA AUTOCOMPLETE-->
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
		<script
				  src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"
				  integrity="sha256-Nnknf1LUP3GHdxjWQgga92LMdaU2+/gkzoIUO+gfy2M="
				  crossorigin="anonymous"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1; Rosenblueth; Educacion;"  />
  </head>
  
  <body id="body">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 49px; position: absolute;">
      <div class="container">
        <img src="img/logo-white.png">
        <a class="navbar-brand" href="#">Credencialización</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target="#myModal2" style="color:#FFF;">Buscar</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target="#myModal4" style="color:#FFF;">Captura libre</a>
            </li>
          </ul>
        </div>
		<form class="form-inline">
			<label style="color:#FFF;">Buscando en...</label>
			<select class="form-control " style="width:14em;" onchange="ae();" id="select_excel">
				<option>Seleciona un archivo</option>
				<?php
					require('php/buscar_archivos.php');
				?>
			</select>
		</form>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8">
            <!--<img class="img-fluid" src="http://placehold.it/750x500" alt="">-->
          <div>
            <div class="col-sm-12" style="height:485px;" onclick="movimiento();" onmousemove="seguir();">
  				<video autoplay="true" name="video" id="video" ></video>
  				<div id="siguelo" style="position: absolute; left: 200px; top: 25px;outline: 4px solid #F00;width:316px;height:446px" ondblclick="captura();" ></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
                 <canvas id="canvas" width="316" height="446"></canvas>
          </div>
        </div>

      </div>
      <!-- /.row -->
      <!-- Otras fotografías
      <h5 class="my-4">Nombre Alumno</h5>-->
      <div class="row">
         <div class="col-md-8">
            <h3 id="tag_name" >Nombre</h3>
         </div>
         <div class="col-md-4">
            <h3 id="tag_sec" >Matricula</h3>
         </div>
      </div>
      <div class="row">
        <div class="col-md-2 offset-md-1 col-sm-6 mb-4" id="foto1">
          <a href="#" id="cfoto_alum">
				    <img src="fotos/extra/usuario.png" alt="Alumno" height="80" width="60" id="foto_alum" onclick="verificar(matricula,0);">
          </a>
        </div>

        <div class="col-md-2 col-sm-6 mb-4" id="foto2">
    			<a href="#">
                  <img src="fotos/extra/usuario.png" alt="Contacto 1" height="80" width="60" id="foto_cont1" onclick="verificar(matricula,1);">
    			</a>
        </div>

        <div class="col-md-2 col-sm-6 mb-4" id="foto3">
    			<a href="#">
    				<img src="fotos/extra/usuario.png" alt="Contacto 2" height="80" width="60" id="foto_cont2" onclick="verificar(matricula,2);">
    			</a>
        </div>

        <div class="col-md-2 col-sm-6 mb-4" id="foto4">
    			<a href="#">
    				<img src="fotos/extra/usuario.png" alt="Contacto 3" height="80" width="60" id="foto_cont3" onclick="verificar(matricula,3);">
    			</a>
        </div>
        <div class="col-md-2 col-sm-6 mb-4" id="foto5">
    			<a href="#">
    				<img src="fotos/extra/usuario.png" alt="Contacto 4" height="80" width="60" id="foto_cont4" onclick="verificar(matricula,4);">
    			</a>	
        </div>
      </div>
      <!-- /.row -->
      <!--Modal para obtener excel y buscar nombre-->
      <div id="modalExcel" class="col-sm-12" style="position: fixed; width: 40em; height: 23em; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; border: #333333 3px solid; background-color: #FAFAFA; color: #000000; display:none;">
      </div>
      <!--Termina modal-->
      <!-- Modal -->
      <div class="modal fade" id="myModal2" role="dialog" >
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Buscar</h4>
            </div>
            <form	class="form-horizontal" role="form"  action="php/buscar_alumno.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
          		<label class='control-label' for='name'>Nombre del alumno:</label>
          		<input type='text' id='input_name' name='input_name' class='form-control'/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-cl-ba">Cerrar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
		
		<div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Libre</h4>
            </div>
            <form	class="form-horizontal" role="form"  action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
          		<label class='control-label' for='name'>Identificador:</label>
          		<input type='text' id='input_name_l' name='input_name_l' class='form-control'/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="librefoto();">guardar foto</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    	<!--input para obtener img del canvas-->
    	<form method="post" accept-charset="utf-8" name="form1">
    		<input name="hidden_data" id='hidden_data' type="hidden"/>
    	</form>

    </div>
	<style>
		.ui-autocomplete {
			z-index: 2147483647;
		}
	</style>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Desarrollado por MCR MJM 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
  <script src="vendor/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/use_webcam.js" type="text/javascript"></script>
	<script src="js/snapshot.js" type="text/javascript"></script>
	<script src="js/mover_puntero.js" type="text/javascript"></script>
	<script src="js/cargar_nav.js" type="text/javascript"></script>
  <script src="js/busqueda_ajax.js" type="text/javascript"></script>
	<script src="js/guardar_imagenes.js" type="text/javascript"></script>
	<script src="js/buscar_existente.js" type="text/javascript"></script>
	<script src="js/recargar_fotos.js" type="text/javascript"></script>
	<script src="js/autocomplete.js" type="text/javascript"></script>
	<script src="js/ajax_excel.js" type="text/javascript"></script>
	<script src="js/foto_maestro.js" type="text/javascript"></script>
	<script type="text/javascript">
		var excel_buscar = "";
		
		function ae()
		{
			var combo = document.getElementById('select_excel');
			
			excel_buscar = combo.options[combo.selectedIndex].value;
			alert(excel_buscar);
			existe_excel(excel_buscar);
		}
	</script>
  </body>

</html>
