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
	<form class = "form-register" action="{{ action('EmprendedorController@store') }}" method="post">
		{{csrf_field()}}
		<h2>REGISTRATE COMO EMPRENDEDOR</h2>

	<div class= "contenedor-inputs"
		<p>Nombre:</p>
		<input type="text" class="field" name= "nombre"required> 

		<p>Apellido:</p>
		<input type="text" class="field" name="apellido" required>

		<p>Pais:</p>	
		<select onchange="" id="pais" name="pais" class="form-control" required >
			<option value="0" selected>Elegir..</option>
			@foreach($pais as $p)
				<option value="{{$p->idPais}}">{{$p->nombrePais}}</option>
			@endforeach
		  </select>

		<p>Email:</p>
		<input type="email" class="field" name="email" required>

		<p>Nombre de Usuario:</p>
		<input type="text" class="field" name= "nick" required>

		<p>Contraseña:</p>
		<input type="password" class="field" name= "password" required>

		<p class="center-content">
			<input type="submit" class="btn btn-green" name= "boton_registrar" value="Registrar">
		</p>
	</div>

	</form>
</body>
</html>
