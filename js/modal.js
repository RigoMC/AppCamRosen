	function mostrarModal(id)
	{
		if(id==1)
		{
			//modal carga de excel
			var ventana = document.getElementById("modalExcel");
			ventana.innerHTML = '<form	class="form-horizontal" role="form"  action="php/guardar_excel.php" method="post" enctype="multipart/form-data">'+
									'<label class="control-label" for="document" >Documento: (matricula,nombre,seccion)</label>'+
									'<input type="file" id="document" name="document" class="form-control"/>'+
									'<br/>'+
									'<br/>'+
									'<input type="submit" class="btn btn-info" value="Cargar" />'+
									'<button type="button" onclick="ocultarModal();" class="btn btn-danger">Cerrar</button>'+
								'</form>';
			var button = document.getElementById('buscarn');
			ventana.style.marginTop = "10em";
			ventana.style.left = ((document.body.clientWidth-350) / 2.5) +  "px";
			ventana.style.display = "block";
		}
		if(id==2)
		{
			//modal carga de alumno
			var ventana = document.getElementById("modalExcel");
			ventana.innerHTML = '<form	class="form-horizontal" role="form"  action="php/buscar_alumno.php" method="post" enctype="multipart/form-data">'+
									"<label class='control-label' for='name'>Nombre del alumno:</label>"+
									"<input type='text' id='input_name' name='input_name' class='form-control'/>"+
									"<br/>"+
									"<br/>"+
									"<button type='button' onclick='buscar_alumno();' class='btn btn-info'>mostrar</button>"+
									"<button type='button' onclick='ocultarModal();' class='btn btn-danger'>Cerrar</button>"+
								'</form>';
			ventana.style.marginTop = "10em";
			ventana.style.left = ((document.body.clientWidth-350) / 2.5) +  "px";
			ventana.style.display = "block";
		}
	}
	
	function ocultarModal()
	{
		var ventana = document.getElementById("modalExcel");
		ventana.style.display = "none";
	}
	
	function getGET()
	{
	   var loc = document.location.href;
	   var getString = loc.split('?')[1];
		var GET = getString.split('&');
		var get = {};//this object will be filled with the key-value pairs and returned.
		for(var i = 0,l = GET.length; i < l; i++){
		  var tmp = GET[i].split('=');
		  get[tmp[0]] = unescape(decodeURI(tmp[1]));
		}
		return get;
	}