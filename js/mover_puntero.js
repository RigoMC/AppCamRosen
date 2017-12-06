var mov = 0;
var x = 0;
var y = 0;

  	function seguir()
  	{				
      //Compruebo que existe un movimiento
      if (mov == 1)
      {
        //Capto las coordenads del puntero.
        x = window.event.x;
        y = window.event.y;
		
		x-= 185;
		y-= 112;
		
		if(x < 20) x = 20;
	    if(x > 300) x = 340;
		if(y < 0) y = 0;
		if(y > 30)  y = 30;
		
        //Y se las coloco al div.
        document.getElementById("siguelo").style.left = x + "px";
        document.getElementById("siguelo").style.top = y + "px";
      }
  	}
	
    function movimiento()
    {
      if(mov != 1)
      {
          mov = 1;
      }
      else
      {
        mov = 0;
      }

    }
	