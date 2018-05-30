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
	<link href="{{asset('css/stylepagprin.css')}}" rel='stylesheet' type='text/css'>
	

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<!--<div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="60" width="90"></div>
        <div id="main_tip_search">
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>-->
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object navbar-info">
    		<div id="wrapper-sorting">
            <div id="wrapper-title-1">
            <div class="top-rated object">Registrate</div>
            	<div id="fleche-nav-1"></div>
    		</div>

            <div id="wrapper-title-2">
            <a href="#"><div class="recent object">Sobre Nosotros</div></a>
                <div id="fleche-nav-2"></div>
    		</div>

            <div id="wrapper-title-3">
            <a href="#"><div class="oldies object">Oldies</div></a>
                <div id="fleche-nav-3"></div>
    		</div>
			<!--- "{{asset('img/icon-premium.svg')}}"-->
            </div>
            <div id="wrapper-bouton-icon">
            	<div id="bouton-ai"><img src="{{asset('img/icon-ai.svg')}}" alt="illustrator" title="Illustrator" height="28" width="28"></div>
            	<div id="bouton-psd"><img src="{{asset('img/icon-psd.svg')}}" alt="photoshop" title="Photoshop" height="28" width="28"></div>
            	<div id="bouton-theme"><img src="{{asset('img/icon-themes.svg')}}" alt="theme" title="Theme" height="28" width="28"></div>
            	<div id="bouton-font"><img src="{{asset('img/icon-font.svg')}}" alt="font" title="Font" height="28" width="28"></div>
            	<div id="bouton-photo"><img src="{{asset('img/icon-photo.svg')}}" alt="photo" title="Photo" height="28" width="28"></div>
            	<div id="bouton-premium"><img src="{{asset('img/icon-premium.svg')}}" alt="premium" title="Premium" height="28" width="28"></div>
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

            <div class="w3-content w3-section" style="max-width:1000px">
              <img class="mySlides" src="{{asset('img/psd-1.jpg')}}" style="width:100%">
              <img class="mySlides" src="{{asset('img/psd-4.jpg')}}" style="width:100%">
              <img class="mySlides" src="{{asset('img/psd-3.jpg')}}" style="width:100%">
            </div>

            <script>
            var myIndex = 0;
            carousel();

            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            </script>

						<div class="w3-container w3-content w3-center w3-padding" style="max-width:800px" id="band">
	 <h2 class="w3-wide">Emprende Ayuda</h2>
	 <p class="w3-opacity"><i>Crea Patrocina Compra</i></p>
	 <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
		 ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
		 adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

 </div>
 <!-- The Tour Section -->
 <!--- "{{asset('img/psd-1.jpg')}}"-->
   <div class="w3-blue" id="tour">
     <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
       <h2 class="w3-wide w3-center">Top Proyectos</h2>
       	<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
         	<div class="w3-third w3-margin-bottom">
           <img src="{{asset('img/psd-1.jpg')}}" alt="New York" style="width:100%" class="w3-hover-opacity">
           <div class="w3-container w3-white">
             <p><b>Proyecto 1</b></p>
             <p class="w3-opacity">Fecha</p>
             <p>Descripcion</p>
             <button class="w3-button w3-light-blue w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button>
           </div>
         </div>
         <div class="w3-third w3-margin-bottom">
           <img src="{{asset('img/psd-1.jpg')}}" alt="Paris" style="width:100%" class="w3-hover-opacity">
           <div class="w3-container w3-white">
             <p><b>Proyecto 2</b></p>
             <p class="w3-opacity">Fecha</p>
             <p>Descripcion</p>
             <button class="w3-button w3-light-blue w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button>
           </div>
         </div>
         <div class="w3-third w3-margin-bottom">
           <img src="{{asset('img/psd-1.jpg')}}" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
           <div class="w3-container w3-white">
             <p><b>Proyecto 3</b></p>
             <p class="w3-opacity">Fecha</p>
             <p>Descripcion</p>
             <button class="w3-button w3-light-blue w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button>
           </div>
         </div>
       </div>
     </div>
   </div>

					</section>

				</div>

			</div>

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
