$(document).ready(function(){

	$("#slider").owlCarousel({
		items : 1,
		dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1800,
        dotsSpeed: 1800,
        dragEndSpeed: 1800,
        rewind: true
	});

	$("#logos").owlCarousel({
		items : 6,
		dots: false,
		nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        rewind: true,
        navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
	});

	$(".btnComprar").click(function(e){
		e.preventDefault();
		var plan = $(this).closest('section').find('h2').text();
		var tipo = $(this).parent('.box').find('h3').text();
		var color = $($(this).closest('section')).css('background-color');
		var precio_formatted = $(this).parent('.box').find('span').html();
		var valor_total = $(this).parent('.box').data('valor');
		var StrippedPrecio = precio_formatted.replace(/(<([^>]+)>)/ig,"");
		
		
		$("#valor_total").val(valor_total);
		$("#plan_elegido").val(plan + '/' + tipo + ': ' + StrippedPrecio);
		$("#popup .boton").html('Pagar ' + plan + ' / ' + tipo + ': ' + StrippedPrecio).css('background-color',color);	
		$("#popup, .overlay").fadeIn(300);
	})

	$("#popup .cerrar").click(function(e){
		e.preventDefault();
		$("#valor_total").val("");
		$("#popup, .overlay").fadeOut(300);
	})

})


function ingresamos(){
	var err = 0;
    $("#popup form input").each(function(){
    	if( $(this).val() == "" ){
    		err++;
    	}
    })

    if( err > 0 ){
    	alert("Todos los campos son requeridos");
    } else {
		$("#popup .boton").replaceWith('<p class="pull-left" style="margin-top: 40px;color: #2d3ba1;"><strong>Procesando...</strong></p>')
		$("#popup form").submit();
	}
}