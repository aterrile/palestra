$(document).ready(function(){

	$(".btnComprar").click(function(e){
		e.preventDefault();
		var plan = $(this).closest('section').find('h2').text();
		var tipo = $(this).parent('.box').find('h3').text();
		var color = $($(this).closest('section')).css('background-color');
		var precio = $(this).parent('.box').find('span').html();
		
		$("#popup .boton").html('Pagar ' + plan + ' / ' + tipo + ': ' + precio).css('background-color',color);

		
		$("#popup, .overlay").fadeIn(300);
	})

	$("#popup .cerrar").click(function(e){
		e.preventDefault();
		$("#popup, .overlay").fadeOut(300);
	})

})