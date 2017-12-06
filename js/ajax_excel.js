function existe_excel()
{
	
	//peticion ajax para obtener la matricula del documento excel
	$.ajax(
		{
			url: "php/existe_excel.php",
			type: "post",
			data: {'name': 1},
			dataType : 'text',
			success: function(data)
			{
				if(data == 1)
				{
					$('#ic_existe').attr( "src", "fotos/extra/correcto.png" );
				}
				else
				{
					$('#ic_existe').attr( "src", "fotos/extra/incorrecto.png" );
				}
			}
		});
}

$('#body').ready(existe_excel());