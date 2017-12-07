function existe_excel(n)
{
	
	//peticion ajax para obtener la matricula del documento excel
	$.ajax(
		{
			url: "php/existe_excel.php",
			type: "post",
			data: {'name': n},
			dataType : 'text',
			success: function(data)
			{
				if(data == 1)
					alert('Cargado exitosamente');
				else
					alert('Error al cargar');
			}
		});
}
