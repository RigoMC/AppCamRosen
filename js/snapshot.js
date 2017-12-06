
var snap;

function captura()
{
	//obtenemos video, canvas y el rectangulo
	var video = document.getElementById("video");
	var canvas = document.getElementById("canvas");
	var div = document.getElementById("siguelo");

	//obtenemos el contexto 2d del canvas
	var ctx = canvas.getContext("2d");
	
	//limpiamos canvas por si exite alguna imagen
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	
	//dibujamos la imagen en el contexto
	//los datos con s modifican la imagen, con d modifican el canvas
	//datos:       img,sx,sy,sw,sh,dx,dy,dw,dy
	ctx.drawImage(video,x,y,316,446,0,0,316,446);
}
