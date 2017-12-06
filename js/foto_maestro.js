var matm = 0;
function maestrofoto()
{
	var nom = document.getElementById("input_name_m").value;
	
	$.ajax(
	{
		url: "php/buscar_maestro.php",
		type: "post",
		data: {'name': nom},
		dataType : 'text',
		success: function(data)
		{
			matm = data;
		}
	});

	if(matm != 0){
		uploadExM(5,matm);
		location.href="index.html";
	}
}

function librefoto()
		{
			var nom = document.getElementById("input_name_l").value;
			uploadExM(6,nom);
		}