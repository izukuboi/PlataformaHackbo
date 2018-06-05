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
	<form action="" class = "form-login">
		<h2>Ingresar</h2>

	<div class= "contenedor-inputs"
		<p>Nombre Usuario:</p>
		<input type="text" class="field" name= "Nombre"required placeholder="Nombre Usuario"> <br/>

		<p>Password:</p>
		<input type="text" class="field" name="Apellido" required placeholder="Password"> <br/>


		<p class="center-content">
			<input type="submit" class="btn btn-green" name= "boton_registrar" value="Registrar">
		</p>
	</div>

	</form>
</body>
</html>
