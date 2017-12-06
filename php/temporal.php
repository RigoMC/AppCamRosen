<?php
	$id = 0;
	$matricula = 0;
	$foto = 0;
	$url = 0;
	
	//buscar las variables y asignar
	if( isset( $_POST['id'])) 
	{
		$id = $_POST['id']; 
	}
	if( isset( $_POST['matricula'])) 
	{
		$foto = $_POST['matricula']; 
	}
	if( isset( $_POST['foto'])) 
	{
		$foto = $_POST['foto']; 
	}
	
	$file= $matricula.".jpg"; // Nombre del fichero a descargar (con ruta claro esta) 
	header ('Content-Disposition: attachment; filename='.$file.';' ); 
	header ('Content-Type: application/force-download'); 
	
	echo "DESCARGA COMPLETADA";
?>