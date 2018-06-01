<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title>Regístrate</title>
	<link rel="stylesheet" href="boton.css">
	<link rel="stylesheet" href="{{ asset('css/register_styles.css') }}">
</head>
<body>


	
	<form action="" class = "form-register">

	<div class= "contenedor-inputs"



		<p> 
			
			
			<a href="{{action('EmprendedorController@create')}}" class="btn btn-green">Registrar Emprendedor</a>

		</p>
		<p> 
			
			<a href="{{action('ConsultorController@create')}}" class="btn btn-green">Registrar Consultor</a>
		</p>

		<p> 
				<a href="{{action('ClienteController@create')}}" class="btn btn-green">Registrar Cliente</a>
		</p>	

		<p> 
				<a href="{{action('PatrocinadorController@create')}}" class="btn btn-green">Registrar Patrocinador</a>
		</p>
	</div>

	</form>
</body>
</html>