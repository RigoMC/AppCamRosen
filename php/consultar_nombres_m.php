<?php
	$name = $_REQUEST['term'];
	$name = strtoupper($name);
	$array; 
	
	header("Content-Type: text/html;charset=utf-8");
	
	require_once('../lib/PHPExcel/Classes/PHPExcel.php');

	// se incluye el documento para hacer objetos de lectura
	require_once dirname(__FILE__) . '/../lib/PHPExcel/Classes/PHPExcel/IOFactory.php';

	// se lee el documento
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
	$prueba= $sheet->rangeToArray('B2'.":B".$highestRow,'error',TRUE,FALSE);	
	for($cont = 0 ; $cont < $row = count($prueba) ; $cont++)
	{
		$row = $prueba[$cont][0];
		//echo $row;
		$nombre['n'] = $row;
		if(strstr($nombre['n'],$name))
		{
			//echo "ya entro al si -----------------------------------------------------------------------------------------------";
			$array[$cont] = $nombre;//utf8_encode($nombre);
		}
	}
	
	//mandamos un string con el que haremos un arreglo en javascript
	echo json_encode($array);	
?>