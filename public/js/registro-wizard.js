$(document).ready(function(){

	$('#boton_auxiliar_siguiente').live( 'click', wizard_next);
	$('#boton_auxiliar_anterior').live( 'click', wizard_prev);
	$('#cierre-modal-confirmacion-registro').live( 'click', register_modal_close)

});

function wizard_next( e )
{
	var boton = $(e.currentTarget);

	if( boton.val() == 1 )
	{
		$('#contenedor_registro_1').removeClass('active').addClass('inactive');
		$('#contenedor_registro_2').removeClass('inactive').addClass('active');
	}
	else if( boton.val() == 2 )
	{
		$('#contenedor_registro_2').removeClass('active').addClass('inactive');
		$('#contenedor_registro_3').removeClass('inactive').addClass('active');
	}
}

function wizard_prev( e )
{
	var boton = $(e.currentTarget);	

	if( boton.val() == 2 )
	{
		$('#contenedor_registro_1').removeClass('inactive').addClass('active');
		$('#contenedor_registro_2').removeClass('active').addClass('inactive');
	}
	else if( boton.val() == 3 )
	{
		$('#contenedor_registro_2').removeClass('inactive').addClass('active');
		$('#contenedor_registro_3').removeClass('active').addClass('inactive');
	}
}

function register_modal_close( e )
{	
	e.preventDefault();
	alert('Hola');
	$('#divOverlay').remove();
	$('.clsVentana').remove();
}