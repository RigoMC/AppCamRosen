<?php
	$name = $_POST['n'];
	$data = 0;
	
	if(file_exists('../exceldata/'.$name))
	{
		$data = 1;
	}
	
	echo $data;
?>