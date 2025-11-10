$('#input_name').autocomplete({
	minLength: 3,
	source: "php/consultar_nombres.php",
	focus: function( event, ui ) 
	{
		return false;
	},
	select: function( event, ui ) {
		$( "#input_name" ).val(ui.item.n);
		buscar_alumno();
		return false;
	}
})
	.autocomplete( "instance" )._renderItem = function( ul, item ) 
	{
		return $( "<li>" )
		.append( "<div>" + item.n+"</div>" )
		.appendTo( ul );
	}
	
