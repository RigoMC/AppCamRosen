function $_GET() 
		{
			var vars = [], hash;
			var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			for(var i = 0; i < hashes.length; i++)
			{
				hash = hashes[i].split('=');
				vars.push(hash[0]);
				vars[hash[0]] = hash[1];
			}
			return vars;
		}
		
		function cargar()
		{
			var ar = $_GET()
			var m = ar['matricula'];
			var n = ar['nombre'];
			var s = ar['seccion'];
				
			if(m == null || n == null || s==null){}
			else
			{
				var nn = n.replace(/%20/g, " ");
				
				if(m == null || nn == null || s==null)
				{
				
				}
				else
				{
					cargar_fotos(m, nn, s);
				}
			}
		}