function recortar()
{
	var canvas = document.getElementById("canvas");
	
	var curl = canvas.toDataURL();
	
	var ctx = canvas.getContext("2d");
	
	//dibujamos la imagen en el contexto añadiendo 4 parametros mas 
	//los primeros cuatro indican la posicion (recorte de la imagen)
	//los 4 ultimos indican la posicion en el canvas y la resoucion
	//(image, sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight)
	ctx.drawImage(video,,130,10,640,480);
}