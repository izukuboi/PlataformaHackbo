<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title>Regístrate</title>
	<link rel="stylesheet" href="boton.css">
</head>
<body>
	<form action="" class = "form-register">
		<h2>REGISTRATE COMO CONSULTOR</h2>

	<div class= "contenedor-inputs"
		<p>Nombre:</p>
		<input type="text" class="field" name= "Nombre"required> <br/>

		<p>Apellido:</p>
		<input type="text" class="field" name="Apellido" required> <br/>

		<p>Pais:</p>	
		<select name= "Pais" class = "combobox" required>
			<option value= "None">Seleccione pais</option>
			<option value= "Bolivia">Bolivia</option>
			<option value= "Argentina">Argentina</option>
			<option value= "Brasil">Brasil</option>

		</select>

		<p>Especialidad:</p>	
		<select name= "Especialidad" class = "combobox" required>
			<option value= "None">Seleccione especialidad</option>
			<option value= "Front-End">Front-End</option>
			<option value= "Back-End">Back-End</option>
			<option value= "Movil">Movil</option>

		</select>

		<p>Email:</p>
		<input type="email" class="field" name="Email" required> <br/>

		<p>Nombre de Usuario:</p>
		<input type="text" class="field" name= "NombreUsuario" required> <br/>

		<p>Contraseña:</p>
		<input type="password" class="field" name= "Password" required> <br/>
		<p>Tiempo:</p>
		<input type="text" class="field" name= "Tiempo" required> <br/>
		<p>Tarifa:</p>
		<input type="text" class="field" name= "Tarifa" required> <br/>

		<p class="center-content">
			<input type="submit" class="btn btn-green" name= "boton_registrar" value="Registrar">
		</p>
	</div>

	</form>
</body>
</html>
