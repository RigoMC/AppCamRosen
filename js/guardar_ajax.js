function guardar_foto(id)
{
	var canvar = document.getElementById('canvas');
	var imagen = canvas.toDataURL("image/jpeg");
	
    /* Envío la petición XHR al servidor con los datos de la imagen */
    $.ajax(
		{
			url: "php/temporal.php",
			type: "POST",
			data: {'id': id ,'foto': imagen, 'matricula':matricula},
			dataType : 'text',
			success: function(data)
			{
				alert(data);
			}
		});
}

	