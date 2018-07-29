<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pagina Principal Proyecto</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/stylepublicaproyecto.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/formregistrarproyecto.css')}}" rel='stylesheet' type='text/css'>
    
	

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->
<div class="w3-jumbo">
		<a href="{{action('InicioController@create')}}"<b>Banca Fácil</b> </a>
</div>
<div id="wrapper-header">
	<div id="main-header" class="object">
        <div id="wrapper-title-2">
            <a href="#"><div class="recent object">Sobre Nosotros</div></a>
        </div>
        <div id="wrapper-title-2">
            <a href="#"><div class="recent object">Como Funcionamos</div></a>
        </div>
        <div id="wrapper-title-2">
            <a href="#"><div class="recent object">Contactanos</div></a>
        </div>
		<!--<div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="60" width="90"></div>-->
	</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object navbar-info">
    		<div id="wrapper-sorting">
           <div id="wrapper-title-1">
            <div class="top-rated object">Busca Proyectos</div>
            </div>
            
            <div id="wrapper-title-2">
            <a href="#"><div class="recent object">Registrate</div></a>
            </div>
            
            <div id="wrapper-title-3">
            <a href="#"><div class="oldies object">Ingresa</div></a>
            </div>

            
            </div>
            
    	</div>
    </div>



<!-- FILTER -->

	<div id="main-container-menu" class="object">
    	<div class="container-menu">

            <div id="main-cross">
            	<div id="cross-menu"></div>
            </div>

            <div id="main-small-logo">
            	<div class="small-logo"></div>
            </div>

            <div id="main-premium-ressource">
                <div class="premium-ressource"><a href="#">Premium resources</a></div>
            </div>

            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>

            <div id="main-psd">
                <div class="psd"><a href="#">PSD goodies</a></div>
            </div>

            <div id="main-ai">
                <div class="ai"><a href="#">Illustrator freebies</a></div>
            </div>

            <div id="main-font">
                <div class="font"><a href="#">Free fonts</a></div>
            </div>

            <div id="main-photo">
                <div class="photo"><a href="#">Free stock photos</a></div>
            </div>

        </div>
    </div>


<!-- PORTFOLIO -->

	<div id="wrapper-container">

		<!--<div class="container object">-->

			<div id="main-container-image">

					<section class="work">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

            <!--<h2 class="w3-center">Mejores Proyectos</h2>-->
			<!--- "{{asset('img/psd-3.jpg')}}"-->
	<div class="w3-container w3-content w3-center w3-padding" style="max-width:800px" id="band">
	   <h2 class="w3-wide w3-xxxlarge"><b>Inicia el Proceso de solicitud de crédito</b></h2>
	   
    </div>
    <div class="w3-content w3-section" style="max-width:100%">
    <table style="width:100%">
  <tr>
    <th><img class="mySlides" src="{{asset('img/694.jpg')}}" style="width:100%"></th>
    <th><form class="form-register" style="width:80%" >
              <div class= "contenedor-inputs">
		<p>Nombre:</p>
		<input type="text" class="field" name= "nombre"required>

		<p>Apellido Paterno:</p>
		<input type="text" class="field" name= "apellidop"required>

		<p>Apellido Materno:</p>
		<input type="text" class="field" name= "apellidom"required>

		<p>Teléfono:</p>
		<input type="text" class="field" name= "apellidom"required>

		<p>Tipo de Crédito:</p>
		<select name= "tipocredito" class = "combobox" required>
			<option value="0" selected>Elegir..</option>
			@foreach($equipoemprendedor as $e)
				<option value="{{$e->idTipoCredito}}">{{$e->nombreEquipo}}</option>
			@endforeach

		</select>

		

		<p class="center-content">
			<input type="submit" class="btn btn-green" name= "boton_registrar" value="Iniciar proceso">
		</p>
	</div>
</form></th>
    
  </tr>
</table>          
    </div>
              
<!-- Sobre Nosotros -->
  

<br><br>




		

				

			

    <!--<div id="wrapper-oldnew">
    	<div class="oldnew">
        	<div class="wrapper-oldnew-prev">
            	<div id="oldnew-prev"></div>
        	</div>
            <div class="wrapper-oldnew-next">
            	<div id="oldnew-next"></div>
    		</div>
        </div>
	</div>-->

	<!--<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
    	</div>
	</div>-->

	<div id="main-container-footer">
		<div class="container-footer">

            <div id="row-1f">
            	<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Quienes somos?</span><br>Platz is a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
            </div>

            <div id="row-2f">
            	<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Como funciona</span><br>Platz offers you all the latest freebies found all over the fourth corners without to pay.</div>
            </div>

            <div id="row-3f">
            	<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
            </div>

            <div id="row-4f">
            	<div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>

				<div id="main_tip_newsletter">
					<form>
						<input type="text" name="newsletter" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
					</form>
				</div>
            </div>

		</div>
	</div>


    <div id="wrapper-copyright">
		<div class="copyright">


			<div class="wrapper-navbouton">
    			<div class="google object">g</div>
    			<div class="facebook object">f</div>
    			<div class="linkin object">i</div>
    			<div class="dribbble object">d</div>
    		</div>
    	</div>
    </div>

</div>



<!-- SCRIPT -->
<!-- "{{asset('js/main.js')}}"-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src= "{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	<script>





/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();
		//"{{asset('img/theme-4.jpg')}}"-->
		img1.src = "{{asset('img/psd-4.jpg')}}";
		img2.src = "{{asset('img/font-1.jpg')}}";
		img3.src = "{{asset('img/psd-1.jpg')}}";
		img4.src = "{{asset('img/psd-2.jpg')}}";
		img5.src = "{{asset('img/ai-1.jpg')}}";
		img6.src = "{{asset('img/theme-2.jpg')}}";
		img7.src = "{{asset('img/psd-3.jpg')}}";
		img8.src = "{{asset('img/font-2.jpg')}}";
		img9.src = "{{asset('img/font-3.jpg')}}";
		img10.src = "{{asset('img/ai-2.jpg')}}";
		img11.src = "{{asset('img/icons-1.jpg')}}";
		img12.src = "{{asset('img/ui-1.jpg')}}";
		img13.src = "{{asset('img/font-5.jpg')}}";
		img14.src = "{{asset('img/theme-2.jpg')}}";
		img15.src = "{{asset('img/psd-5.jpg')}}";
		img16.src = "{{asset('img/icons-3.jpg')}}";
		img17.src = "{{asset('img/font-4.jpg')}}";
		img18.src = "{{asset('img/theme-3.jpg')}}";
		img19.src = "{{asset('img/font-6.jpg')}}";
		img20.src = "{{asset('img/theme-4.jpg')}}";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>


</body>


</html>
