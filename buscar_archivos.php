<?php
	if($array = scandir("exceldata/"))
	{
		for($c = 2; $c < count($array); $c++)
		{
			echo "<option id='".$c."' value='".$array[$c]."'>".$array[$c]."</option>";
		}
	}
?>