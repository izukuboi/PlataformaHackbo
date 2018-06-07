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
		<h2>REGISTRATE COMO CLIENTE</h2>

	<div class= "contenedor-inputs"
		<p>Nombre:</p>
		<input type="text" class="field" name= "Nombre Proyecto"required> <br/>

		<p>Apellido:</p>
		<input type="text" class="field" name="Apellido" required> <br/>

		<p>Pais:</p>	
		<select name= "Pais" class = "combobox" required>
			<option value="0" selected>Elegir..</option>
			@foreach($pais as $p)
				<option value="{{$p->idPais}}">{{$p->nombrePais}}</option>
			@endforeach

		</select>

		<p>Email:</p>
		<input type="email" class="field" name="Email" required> <br/>

		<p>Nombre de Usuario:</p>
		<input type="text" class="field" name= "NombreUsuario" required> <br/>

		<p>Contraseña:</p>
		<input type="password" class="field" name= "Password" required> <br/>

		<p class="center-content">
			<input type="submit" class="btn btn-green" name= "boton_registrar" value="Registrar">
		</p>
	</div>

	</form>
</body>
</html>
