<?php
	$name = $_POST['name'];
	$data = 0;
	
	if(file_exists('../exceldata/'.$name.'.xls'))
	{
		$data = 1;
	}
	
	echo $data;
?>