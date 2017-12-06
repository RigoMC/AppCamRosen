<?php
	$id = 0;
	$matricula = 0;
	$foto = 0;
	$url = 0;
	
	//buscar las variables y asignar
	if( isset( $_GET['id'])) 
	{
		$id = $_GET['id']; 
	}
	
	if( isset( $_GET['mat'])) 
	{
		$matricula = $_REQUEST['mat']; 
	}
	else $matricula = "no hay";
	
	if( isset( $_POST['foto'])) 
	{
		$foto = $_POST['foto']; 
	}
	
	switch($id)
	{
		case 0:
			$url = "/alumno/";
			break;
		case 1:
			$url = "/contacto1/";
			break;
		case 2:
			$url = "/contacto2/";
			break;
		case 3:
			$url = "/contacto3/";
			break;
		case 4:
			$url = "/contacto4/";
			break;
		case 5:
			$url = "/maestro/";
			break;
		case 6:
			$url = "/libre/";
			break;
	}
	
	$upload_dir = "../fotos".$url;
	$img = $_POST['hidden_data'];
	$img = str_replace('data:image/jpeg;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = $upload_dir .$matricula. ".jpg";
	
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';
	echo $success;
?>