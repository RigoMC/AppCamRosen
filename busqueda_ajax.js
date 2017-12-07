var matricula = 0;
var nom;
var sec;
var exist = 0;

//obtener los datos del documento excel 
function buscar_alumno(nombre)
{
	var nombre = getName();
	
	//peticion ajax para obtener la matricula del documento excel
	$.ajax(
		{
			url: "php/buscar_alumno.php",
			type: "post",
			data: {'name': nombre},
			dataType : 'text',
			success: function(data)
			{
				var array = data.split(',');
				matricula = array[0];
				nom = array[1];
				sec = array[2];
				cargar_fotos(matricula,nom,sec);
				$("#btn-cl-ba").click();
				$(':text').val('');
			}
		});
}

//mostrar datos en el index
function cargar_fotos(mat, nom , sec)
{
	var tag_name = document.getElementById('tag_name');
	var tag_sec = document.getElementById('tag_sec');
	
	tag_name.innerHTML = nom;
	tag_sec.innerHTML = mat;
	
	var url  = "fotos/";
	
	var f;
	
	//cargar fotos
	f = document.getElementById('foto_alum');
	f.addEventListener("error", function(){document.getElementById('foto_alum').src = ("fotos/extra/usuario.png");});
	f.src = (url+"alumno/"+mat+".jpg");
	
	f = document.getElementById('foto_cont1');
	f.addEventListener("error", function(){document.getElementById('foto_cont1').src = ("fotos/extra/usuario.png");});
	f.src = (url+"contacto1/"+mat+".jpg");
	
	f = document.getElementById('foto_cont2');
	f.addEventListener("error", function(){document.getElementById('foto_cont2').src = ("fotos/extra/usuario.png");});
	f.src = (url+"contacto2/"+mat+".jpg");
	
	f = document.getElementById('foto_cont3');
	f.addEventListener("error", function(){document.getElementById('foto_cont3').src = ("fotos/extra/usuario.png");});
	f.src = (url+"contacto3/"+mat+".jpg");
	
	f = document.getElementById('foto_cont4');
	f.addEventListener("error", function(){document.getElementById('foto_cont4').src = ("fotos/extra/usuario.png");});
	f.src = (url+"contacto4/"+mat+".jpg");
	
}

	
function getName()
{
	var name = document.getElementById('input_name').value;
	return name;
}
