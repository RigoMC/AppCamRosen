function verificar(mat, id)
{
	$.ajax(
		{
			url: "php/verificar.php",
			type: "post",
			data: {'mat': mat, 'id' : id},
			dataType : 'text',
			success: function(data)
			{
				existe = data;
				ejecutar(existe,id);
			}
		});
}

function ejecutar (exis, id)
{
	if(exis == 0)
	{
		uploadEx(id, matricula);
	}
	else
	{
		preguntar(id);
	}
}

function preguntar(id)
{
	if(confirm('¿Estas seguro de sobreescribir?'))
	{
		uploadEx(id, matricula);
	}
	else
	{
		return false;
	}
}