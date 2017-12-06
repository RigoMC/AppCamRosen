<?php
	
	//instacia de variables
	$file = 1;
	
	//buscar las variables y asignar
	if( isset( $_post['document'])) 
	{
		$file = $_post['document']; 
	}
	
	//mover archivo excel dado por usuario
	function excelcargar($id)
    {
        $raiz = "../";
        $url = "exceldata/$id.xls";
        return move_uploaded_file($_FILES['document']['tmp_name'], ($raiz . $url));
    }
	
	if(excelcargar($file))
	{
		echo "<script>alert('carga exitosa');</script>";
		echo "<script> location.href='../index.html'</script>";
	}
?>