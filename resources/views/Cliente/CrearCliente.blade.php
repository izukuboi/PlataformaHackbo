<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/ico.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Registrar Cliente</title>
 <style media="screen"> body {     background-image: url(https://www.nosolopymes.com/imagenes/Cinco-tipos-de-clientes-online.png);     background-repeat: no-repeat;     background-size: cover;     background-position: 100% top;     background-attachment: fixed;  } </style>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-info bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-dark" href="#">Principal<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Registrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Contactanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contactanos.php">------</a>
            </li>
          </ul>
        </div>
      </nav>
<br><br><br><br>
      <main role="main" class="inner cover">
        <body>
             <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
        <h2>Regístrate como Cliente</h2>
        <p class="lead">Al registrarte como cliente podrás acceder a la plataforma para obtener la información sobre los diferentes productos ofrecidos por emprendedores</p>
      </div>

                                  <form name="form1" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" action="{{ action('ClienteController@store') }}" method="post">
                                    {{csrf_field()}}
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                                          <div class="w3-rest">
                                              <label for="Nombre" class="sr-only">Nombre</label>
                                              <input type="text" name="nombre" id="Nombre" class="form-control" placeholder="Nombre" required autofocus>
                                          </div>
                                  </div>
                                  <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                                        <div class="w3-rest">
                                      <label for="Apellido" class="sr-only">Apellido</label>
                                      <input type="text" name="apellido" id="inputDesc" class="form-control" placeholder="Apellido" required autofocus>
                                        </div>
                                  </div>
                                <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa fa-globe"></i></div>
                                    <div class="w3-rest">
                                      <label for="login" class="sr-only">Pais</label>
                                      {{-- <input type="text" name="pais" id="inputDesc" class="form-control" placeholder="Pais" required autofocus> --}}
                                      <select onchange="" id="pais" name="pais" class="form-control" required >
                                        <option value="0" selected>Elegir..</option>
                                        @foreach($pais as $p)
                                            <option value="{{$p->idPais}}">{{$p->nombrePais}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                  <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                                    <div class="w3-rest">
                                      <label for="login" class="sr-only">Email</label>
                                      <input type="text" name="email" id="inputDesc" class="form-control" placeholder="Email" required autofocus>
                                    </div>
                                </div>
                                <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa fa-drivers-license"></i></div>
                                    <div class="w3-rest">
                                      <label for="login" class="sr-only">Nick</label>
                                      <input type="text" name="nick" id="inputDesc" class="form-control" placeholder="Nombre de Usuario" required autofocus>
                                    </div>
                                </div>
                                <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa fa-drivers-license"></i></div>
                                    <div class="w3-rest">
                                      <label for="login" class="sr-only">Password</label>
                                      <input type="password" name="password" id="inputDesc" class="form-control" placeholder="Contraseña" required autofocus>
                                    </div>
                                </div>
                                      <br>

                                      <button name="Enviar" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit">Registrar</button>
                                  </form>


                          <br>
                          <br>
                          <?php
                          if (isset($_POST['Enviar'])) {

                              $Nombre = $_POST['nombre'];
                              $Apellido = $_POST['apellido'];
                              $Email = $_POST['email'];
                              $Telefono = $_POST['telefono'];
                              $Mensaje = $_POST['mensaje'];


                              if ($Nombre == "" && $Apellido=="" && $Telefono=="" && $Mensaje=="") {
                                  echo '<script type="text/javascript">
                                  alert("Debe rellenar todos los campos!. ");
                                  document.form1.Nombre.focus();
                                  </script>';
                              } else {
                                  //INSERT INTO `curso`.`tblusuarios` (`idUsuario`, `Nombre`, `Apellido`, `login`, `password`, `pregunta`, `respuesta`) VALUES (NULL, 'juan', 'banegas', 'jbanegas', MD5('jbanegas'), '1', '1');
                                  $SqlI = mysqli_query($link,"Insert into contactanos(`nombre`, `apellido`, `email`, `telefono`, `mensaje`)"
                                          . " values('" . $Nombre . "','" . $Apellido . "','" . $Email . "','" . $Telefono . "','" . $Mensaje . "')")
                                          or die("sadasdasdas " . mysqli_errno() . " - " . mysqli_error());
                              }
                          }
                          ?>

</body>
</html>

          </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
