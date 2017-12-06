<?php
	$mat = 16230096;
	$id = 0;
	$data = 0;
	
	if(isset( $_POST['mat']))
	{
		$mat = $_POST['mat']; 
	}
	
	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
	}
	
	switch ($id)
	{
		case 0:
				$url = "fotos/alumno/";
				break;
		case 1:
				$url = "fotos/contacto1/";
				break;
		case 2:
				$url = "fotos/contacto2/";
				break;
		case 3: 
				$url = "fotos/contacto3/";
				break;
		case 4:
				$url = "fotos/contacto4/";
				break;
	}
	
	
	
	if(file_exists($url+$mat+'.jpg'))
	{
		$data = 1;
	}
	
	return $data;
?>