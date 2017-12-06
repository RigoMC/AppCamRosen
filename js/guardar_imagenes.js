var exiA,exi1,exi2,exi3,exi4;

function uploadEx(id, mat)
{
	var canvas = document.getElementById("canvas");
	var dataURL = canvas.toDataURL("image/jpeg");
	document.getElementById('hidden_data').value = dataURL;
	var fd = new FormData(document.forms["form1"]);

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'php/guardar_foto.php?mat='+matricula+'&id='+id, true);

	xhr.upload.onprogress = function(e) {
		if (e.lengthComputable) {
			var percentComplete = (e.loaded / e.total) * 100;
			console.log(percentComplete + '% uploaded');
			alert('¡Guardado con exito!');
		}
	};

	xhr.onload = function() {

	};
	xhr.send(fd);
	
	location.href = "index.html?matricula="+mat+"&nombre="+nom+"&seccion="+sec;
};

function uploadExM(id, mat)
{	
	var canvas = document.getElementById("canvas");
	var dataURL = canvas.toDataURL("image/jpeg");
	document.getElementById('hidden_data').value = dataURL;
	var fd = new FormData(document.forms["form1"]);

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'php/guardar_foto.php?mat='+mat+'&id='+id, true);

	xhr.upload.onprogress = function(e) {
		if (e.lengthComputable) {
			var percentComplete = (e.loaded / e.total) * 100;
			console.log(percentComplete + '% uploaded');
			alert('¡Guardado con exito!');
		}
	};

	xhr.onload = function() {

	};
	xhr.send(fd);
	
	location.href = "index.html";
};