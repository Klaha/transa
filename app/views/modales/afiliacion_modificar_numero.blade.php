<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/ventanas-modales.css')}}">
		<style>
			.modal_afiliacion_texto_wrapper input[type="submit"]{ 
				width: 62px;
				height: 18px;
				background: transparent url('{{asset('img/siguiente.png')}}') no-repeat left top;
				border: none;
				color: transparent;
				display: block;
			}
		</style>
	</head>
	<body>
		<div class="modal_afiliacion_titulo_wrapper">
			<span class="modal_afiliacion_titulo">MODIFICAR AFILIACION</span>
		</div>
		<div class="modal_afiliacion_texto_wrapper">
			{{Form::open( array('url' => '/modal/afiliacionDigitelModificar', 'method' => 'post') )}}
			
			<span class="modal_afiliacion_texto_1">
			{{Form::label('numero') . '<br>'}}
			{{Form::select('prefijo', array('0412' => '0412', '0212' => '0212', '0234' => '0234', '0235' => '0235', '0237' => '0237', '0238' => '0238', '0239' => '0239', '0240' => '0240', '0241' => '0241', '0242' => '0242', '0243' => '0243', '0244' => '0244', '0245' => '0245', '0246' => '0246', '0247' => '0247', '0248' => '0248', '0249' => '0249', '0251' => '0251', '0252' => '0252', '0253' => '0253', '0254' => '0254', '0255' => '0255', '0256' => '0256', '0257' => '0257', '0258' => '0258', '0259' => '0259', '0261' => '0261', '0262' => '0262', '0263' => '0263', '0264' => '0264', '0265' => '0265', '0266' => '0266', '0267' => '0267', '0268' => '0268', '0269' => '0269', '0271' => '0271', '0272' => '0272', '0273' => '0273', '0274' => '0274', '0275' => '0275', '0276' => '0276', '0277' => '0277', '0278' => '0278', '0279' => '0279', '0281' => '0281', '0282' => '0282', '0283' => '0283', '0284' => '0284', '0285' => '0285', '0286' => '0286', '0287' => '0287', '0288' => '0288', '0289' => '0289', '0291' => '0291', '0292' => '0292', '0293' => '0293', '0294' => '0294', '0295' => '0295'))}}
			{{Form::text('numero', str_replace( '0412', '', $afiliacion->numero ), array('pattern' => '.{7,7}', 'class' => 'nuevocelular', 'required', 'x-moz-errormessage' => 'Introduzca un número (Debe tener 7 dígitos)', 'title' => 'Introduzca un número (Debe tener 7 dígitos)'))}}
			</span>
			<br>
			<span class="modal_afiliacion_texto_1">
			{{Form::label('alias') . '<br>' . Form::text('alias', $afiliacion->alias)}}
			</span>
			<br>
			{{Form::hidden('afiliacion_id', $afiliacion->id)}}
			{{Form::submit('Modificar', array('style' => 'margin-top: 12px;margin-left: 2px;')) . Form::close()}}
		</div>
	</body>
</html>