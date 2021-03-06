<?php
	//se incluye libreria
	require_once('../lib/PHPExcel/Classes/PHPExcel.php');
	$name = 'no existe';
	
	if( isset( $_POST['name'])) 
	{
		$name = $_POST['name'];
	}
	
	if($name != "no existe")
	{
		// se incluye el documento para hacer objetos de lectura
		require_once dirname(__FILE__) . '/../lib/PHPExcel/Classes/PHPExcel/IOFactory.php';
		
		// se le el documento
		try {
			$objReader = PHPExcel_IOFactory::createReader('Excel2007');
			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load("../exceldata/2.xlsx");
			$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
		} catch(Exception $e) {
			die('Error loading file'.$e->getMessage());
		}
		
		//  se obtienen dimensiones de la hoja de calculo
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		
		//se obtiene un arreglo con arreglos por cada row
		$prueba = $sheet->rangeToArray('A2'.":B".$highestRow,'error',TRUE,FALSE);	
		
		for($cont = 0 ; $cont < $row = count($prueba) ; $cont++)
		{
			$row = $prueba[$cont];
			$nombre = $row[1];
			
			if($name == $nombre)
			{
				$matricula = $row[0];
				break;
			}
			else
			{
				$matricula = "No existe";
			}
		}
		
		//mandamos un string con el que haremos un arreglo en javascript
		$data = $matricula;
	}
	else 
	{
		$nombre = $name;
		$matricula = "No existe";
		$data = $matricula;
	}
	
	echo $data;
?>