$(document).ready(function(){
	var altura = $('.contenedor').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.contenedor').addClass('contenedor-fixed');
		} else {
			$('.contenedor').removeClass('contenedor-fixed');
		}
	});

});