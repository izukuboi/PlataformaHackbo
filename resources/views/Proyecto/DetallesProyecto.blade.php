<!DOCTYPE HTML>
<html>

<!-- assets y que funcione con la base de datos -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Detailed Single Post</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="{{asset('img/small-logo-01.png')}}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<style>

/*-------------------------*/
/* FONT BDD */
/*-------------------------*/

@font-face {
    font-family: 'socialicoregular';
    src: url("{{asset('font/socialico-webfont.eot')}}");
    src: url("{{asset('font/socialico-webfont.eot?#iefix')}}") format('embedded-opentype'),
         url("{{asset('font/socialico-webfont.woff2')}}") format('woff2'),
         url("{{asset('font/socialico-webfont.woff')}}") format('woff'),
         url("{{asset('font/socialico-webfont.ttf')}}") format('truetype'),
         url("{{asset('font/socialico-webfont.svg#socialicoregular')}}") format('svg');
}

@font-face {
    font-family: 'socialico_plusregular';
    src: url("{{asset('font/socialico_plus-webfont.eot')}}");
    src: url("{{asset('font/socialico_plus-webfont.eot?#iefix')}}") format('embedded-opentype'),
         url("{{asset('font/socialico_plus-webfont.woff2')}}") format('woff2'),
         url("{{asset('font/socialico_plus-webfont.woff')}}") format('woff'),
         url("{{asset('font/socialico_plus-webfont.ttf')}}") format('truetype'),
         url("{{asset('font/socialico_plus-webfont.svg#socialico_plusregular')}}") format('svg');
}


.disable-hover {
	pointer-events: none;
}

img{vertical-align:bottom;}

a {
	text-decoration:none;
}

ul { 
	list-style-type: none; 
	margin:0;
	padding:0;
}

.anim-1,.anim-2{display:none;}

/*-------------------------*/
/* MAIN TRANSITION FOR EFFECT HOVER*/
/*-------------------------*/

.object {
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out; /** Chrome & Safari **/
    -moz-transition: all 0.25s ease-in-out; /** Firefox **/
    -o-transition: all 0.25s ease-in-out; /** Opera **/
}

/*----------------------------*/
/* BODY SETTINGS */
/*----------------------------*/

body,html{
	padding:0;margin:0;
	background-color:#F4F4F4;
}

.cache{
	width:100%;
	height:100%;
	position:absolute;
	background-color:#FFF;
	z-index:1000;
}

/*----------------------------*/
/* CUSTOM SCROLLBAR  */
/*----------------------------*/

::-webkit-scrollbar {
    width: 9px;
}
 
::-webkit-scrollbar-track {
    background:#eee;
    border: thin solid lightgray;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1) inset;
}
 
::-webkit-scrollbar-thumb {
    background:#999;
    border: thin solid gray;
}

/*----------------------------*/
/* HEADER BLACK TOP WITH LOGO */
/*----------------------------*/


#wrapper-header{
	float:left;
	width:105%;
	height:65px;
	background-color:#0cbdff;
	opacity:0;
}

#main-header{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:auto;
}

#logo{
	position:absolute;
    margin-top:13.5px;
	left:15px;
	cursor:pointer;
}

#stripes{
	background: url("{{asset('img/stripes.svg')}}") no-repeat; /*Hubo cambios en esta parte*/
	position:absolute;
	width:27px;
	height:20px;
	right:15px;
	top:22.5px;
	cursor:pointer;
	display:none;
}

#logo img{height:100%;width:100%;}

/*----------------------------*/
/* SUB NAV BAR */
/*----------------------------*/

#wrapper-navbar{
	float:left;
	width:100%;
	height:0px;
	background-color:#99def8;
	border-bottom:solid #EDEDED 5px;
	opacity:0;
}

.navbar{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.top-rated,.recent,.oldies{
	float:left;
	text-align:left;
	font-family: 'Roboto',sans-serif;
    font-size: 13px;
	height:40px;
	line-height:40px;
    margin-top:10px;
	cursor:pointer;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	text-transform: uppercase;
	letter-spacing:1.5px;
}

.top-rated{color:#000000;margin-left:15px;font-weight:500;}
.recent,.oldies{color: #000000;margin-left:80px;font-weight:500;margin-left:40px;}

.top-rated:hover,.recent:hover,.oldies:hover{color:#666;opacity:1;}

#fleche-nav-1,#fleche-nav-2,#fleche-nav-3{
	float:left;
	margin-top:26px;
	background: url("{{asset('img/fleche-nav.svg')}}") no-repeat ;
	width:5px;
	height:10px;
	margin-left:5px;
}

#fleche-nav-2,#fleche-nav-3{opacity:0.5;}

#wrapper-bouton-icon{display:block;}
#bouton-ai,#bouton-psd,#bouton-photo,#bouton-font,#bouton-theme,#bouton-premium{
	float:right;
	width:28px;
	height:28px;
	margin-top:16px;
	margin-right:15px;
	cursor:pointer;
	opacity:1;
	 transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
}

#bouton-ai:hover,#bouton-psd:hover,#bouton-photo:hover,#bouton-font:hover,#bouton-theme:hover,#bouton-premium:hover{opacity:0.5;transform: scale(1.2);}

#bouton-ai img,#bouton-psd img,#bouton-photo img,#bouton-font img,#bouton-theme img,#bouton-premium img{width:100%;height:100%;}

/*----------------------------*/
/* MAIN DIV */
/*----------------------------*/

#wrapper-container{
	float:left;
	width:100%;
	height:auto;
}

.container,.container-footer {
    position:relative;
    width: 1200px;
    margin-left:-600px;
    left:50%;
}

/*----------------------------*/
/* MENU SIDE */
/*----------------------------*/

#main-container-menu {
	position:fixed;
    width:100%;
    height:100%;
	left:-100%;
	background-color:rgba(34, 34, 34, 0.95);
	z-index:1000;
}

.container-menu{
	position:relative;
	height:100%;
	width:100%;
}

/*----------------------------*/
/* CROSS */
/*----------------------------*/

#main-cross{
	float:left;
	min-height:53px;
	width:100%;
	margin-bottom:50px;
}

#cross-menu{
	position:absolute;
	width:18px;
	height:18px;
	right:25px;
	margin-top:25px;
	background: url("{{asset('img/cross-menu.svg')}}") no-repeat;
	cursor:pointer;
}

/*----------------------------*/
/* SMALL LOGO */
/*----------------------------*/

#main-small-logo{
	float:left;
	min-height:53px;
	width:100%;
	margin-bottom:25px;
}

.small-logo{
	position:absolute;
	width:131px;
	height:53px;
	left:50%;
	margin-left:-65.5px;
	background: url("{{asset('img/small-logo.svg')}}") no-repeat;
}

/*----------------------------*/
/* MAIN DIV WITH IMAGE */
/*----------------------------*/

#main-container-image {
    float:left;
    width:100%;
    height:auto;
	background-color:#F4F4F4;
	margin-top:25px;
	opacity:0;

}

.work figure-single {
    float:left;
	width:60%;
	margin-left:7.5%;
    height:auto;
    padding: 0 !important;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
	-webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	background-color:#FFF;
}

.work figure-single img {
    height: 95%;
    width: 95%;
	margin-left:2.5%;
	margin-top:2.5%;
}

#wrapper-part-info{
	position:relative;
	width:100%;
	height:auto;
	background-color:#FFFFFF;
}

.part-info-image-single{
	float:left;
	margin-bottom:17.5px;
}
#wrapper-part-info .part-info-image img{height:20%;width:20%;}

.wrapper-text-description{
	position:absolute;
	width:30%;
	right:7.5%;
	height:auto;
	margin-top:85px;	
}

.wrapper-view,.wrapper-file,.wrapper-weight,.wrapper-desc,.wrapper-download{
	float:left;
	width:100%;
	border-bottom:solid #E0E0E0 1px;
}
.wrapper-file,.wrapper-weight,.wrapper-desc,.wrapper-download{
	border-top:solid #FFF 1px;
}
.wrapper-morefrom{
	float:left;
	width:100%;
	border-top:solid #FFF 1px;
}
.wrapper-view,.wrapper-file,.wrapper-weigh,.wrapper-download,.wrapper-morefrom{height:40px;}
.wrapper-desc,.wrapper-morefrom{height:auto;}

.icon-view,.icon-file,.icon-weight,.icon-desc,.icon-download{
	float:left;
	left:0;
	margin-right:25px;
}
.icon-view{margin-top:10px;}
.icon-file{margin-top:9px;margin-left:2px;}
.icon-weight{margin-top:8px;margin-left:2px;}
.icon-desc{margin-top:7px;}
.icon-download{margin-top:6px;margin-left:3px;}

.icon-view img,.icon-file img,.icon-weight img,.icon-desc img,.icon-download img{height:100%;width:100%;}

.text-view,.text-file,.text-weight,.text-desc,.text-download{
	float:left;
	text-align:justify;
	font-family: Helvetica, sans-serif;
    font-size: 15px;
	font-weight:400;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#000000;
}
.text-view,.text-file,.text-weight,.text-download{
	height:40px;
	line-height:40px;
}
.text-desc{
	width:calc(100% - 49px);
	line-height:130%;
	height:auto;
	margin-bottom:25px;
	margin-top:10px;
}

.text-download a{
	color:#A1A1A1;
	transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out; 
    -moz-transition: all 0.2s ease-in-out; 
    -o-transition: all 0.2s ease-in-out;
}

.text-download a:hover{color:#666;}

.text-morefrom{
	float:left;
	text-align:left;
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:600;
	color:#686868;
	width:100%;
	margin-left:0;
	line-height:130%;
	height:auto;
	margin-bottom:0;
	margin-top:20px;
}

.image-morefrom{
	float:left;
	width:100%;
	margin-top:20px;
	height:auto;
	margin-bottom:35px;
}

.image-morefrom-1,.image-morefrom-2,.image-morefrom-3,.image-morefrom-4{
	float:left;
	width:47.5%;
	height:auto;
	-webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	background-color:#FFF;
	transition: all 0.2s ease-in-out;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	cursor:pointer;
}

.image-morefrom-1,.image-morefrom-3{margin-right:5%;}
.image-morefrom-1,.image-morefrom-2{margin-bottom:12.5px;}

.image-morefrom-1 img,.image-morefrom-2 img,.image-morefrom-3 img,.image-morefrom-4 img{
	width:85%;
	height:auto;
	margin-left:7.5%;
	padding-bottom:7.5%;
	padding-top:7.5%;
}
.image-morefrom-1:hover,.image-morefrom-2:hover,.image-morefrom-3:hover,.image-morefrom-4:hover{opacity:0.5;}

.post-reply,.post-reply-2{
	float:left;
	width:60%;
	margin-left:7.5%;
    height:auto;
}

.post-reply{margin-top:50px;}

.image-reply-post,.image-reply-post-2{
	float:left;
	width:65px;
	height:65px;
	background: url(img/avatar.png) no-repeat;
	top:0;	
}

.image-reply-post{background: url("{{asset('img/avatar.png')}}") no-repeat;}
.image-reply-post-2{background: url("{{asset('img/avatar-2.png')}}") no-repeat;}

.name-reply-post,.name-reply-post-2{
	float:left;
	width:calc(100% - 95px);
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:600;
	color:#686868;
	line-height:65px;
	height:65px;
	padding-left:30px;
}

.text-reply-post,.text-reply-post-2{
	float:left;
	text-align:left;
	height:auto;
	line-height:140%;
	margin-left:95px;
	width:calc(90% - 95px);
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:400;
	color:#999;
	margin-top:-10px;
	border-bottom:solid #E9E9E9 1px;
	padding:20px;
	margin-top:-20px;
}

.post-send{
	float:left;
	width:60%;
	margin-left:7.5%;
	height:auto;
	margin-bottom:25px;
}

#main-post-send{
	float:left;
	width:calc(90% - 160px);
	margin-left:95px;
	height:auto;
	margin-top:0px;
}

#title-post-send{
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:600;
	color:#686868;
	line-height:65px;
	height:65px;
	position:relative;
}

textarea {
    font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:400;
	color:#999;
	width: 320px;
	height: 150px;
	background:#FFF;
	outline:none;
	border:solid 1px #DDDDDD;
	border-radius:4px;
	padding-left:10px;
	padding-top:10px;
	float:left;
	margin-left:-15px;
	margin-top:-25px;
}

input[type=submit] {
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
	font-weight:600;
	color:#FFF;
	cursor: pointer;
	width: 150px;
	height: 40px;
	padding: 5px 10px;
	border-radius:4px;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out; /** Chrome & Safari **/
	-moz-transition: all 0.5s ease-in-out; /** Firefox **/
	-o-transition: all 0.5s ease-in-out; /** Opera **/
	background-color:#74BDEC;
	float:left;
	border:none;
}

fieldset {
	border:none;
}

textarea { 
	resize: vertical;
    max-height:100px; 
    min-height:100px;
}

textarea {
    color: #999;
}
 
textarea:-moz-placeholder {
    color: #999;
}
 
textarea::-webkit-input-placeholder {
    color: #999;
}
 
textarea.placeholder {
    color: #999;
}

.title-item{
	float:left;
	width:92.5%;
	margin-left:7.5%;
	height:68px;
	margin-bottom:10px;
}

.title-icon{
	float:left;
	width:68px;
	height:68px;
	background: url("{{asset('img/piedpiper.jpg')}}") no-repeat;
	margin-right:20px;
}

.title-text{
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 22px;
	font-weight:600;
	color:#686868;
	line-height:125%;
	height:auto;
	width:calc(100% - 88px);
	margin-top:8px;
}

.title-text-2{
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 15px;
	font-weight:400;
	color:#A1A1A1;
	line-height:125%;
	height:auto;
	width:calc(100% - 88px);
	margin-top:8px;
}


/*----------------------------*/
/* BIG TITLE RESSOURCE FOR THE HIDDEN MENU */
/*----------------------------*/

#main-premium-ressource,#main-themes,#main-psd,#main-ai,#main-font,#main-photo{
	float:left;
	width:100%;
	min-height:36px;

}

.premium-ressource,.themes,.psd,.ai,.font,.photo{
	position:relative;
	text-align:center;
	font-family: Helvetica, sans-serif;
    font-size: 16px;
	font-weight:400;
	height:36px;
	line-height:36px;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.premium-ressource a,.themes a,.psd a,.ai a,.font a,.photo a{
	transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out; 
    -moz-transition: all 0.2s ease-in-out; 
    -o-transition: all 0.2s ease-in-out;
}

.premium-ressource a,.themes a,.psd a,.photo a,.font a,.ai a{color:#999;}

.premium-ressource a:hover{color:#CCC;}
.themes a:hover{color:#66CC7A;}
.psd a:hover{color:#2B9ED8;}
.photo a:hover{color:#56514C;}
.font a:hover{color:#B88DFF;}
.ai a:hover{color:#FF9000;}

/*----------------------------*/
/* THX PART AND OLDNEW   */
/*----------------------------*/

#wrapper-thank{
	float:left;
	width:100%;
	height:190px;
	background-color:#F2F2F2;
	margin-top:40px;
}

#wrapper-oldnew{
	float:left;
	width:100%;
	height:80px;
	background-color:#F4F4F4;
	margin-top:50px;
}

.thank,.oldnew{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.thank-text{
	float:left;
	text-align:center;
	font-family: 'Pacifico', cursive;
    font-size: 70px;
	height:190px;
	line-height:190px;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#B3B3B3;
	font-weight:400;
	width:100%;
}

/*----------------------------*/
/* FOOTER */
/*----------------------------*/

#main-container-footer{
	float:left;
	width:100%;
	height:auto;
	background-color:#F9F9F9;
	border-top:solid #F1F1F1 1px;
	-webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);

}

#row-1f,#row-2f,#row-3f,#row-4f{
	float:left;
	width:calc(100% / 4);
	height:auto;
}

.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
	float:left;
	text-align:left;
	height:140%;
	line-height:140%;
	margin-left:20px;
	width:80%;
	text-align:left;
	font-family: Helvetica, sans-serif;
    font-size: 14px;
	font-weight:400;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#A1A1A1;
	margin-top:80px;
}
.text-row-1f,.text-row-2f,.text-row-3f{
	margin-bottom:100px;
}

/*----------------------------*/
/* NEWSLETTER*/
/*----------------------------*/

#main_tip_newsletter{
	float:left;
	width:100%;
	height:auto;
	margin-top:20px;
}

#tip_newsletter_input
{
    font: 15px/1.6 Helvetica, sans-serif;
	color: #CCC;
	padding: 5px 5px 5px 46px;
	width: 170px;
	border:solid 2px #CCC;
	border-radius: 5px;
	-moz-appearance: none;
	-webkit-appearance: none;
    box-shadow: none; 
	outline: 0;
	background: url("{{asset('img/icon-newsletter.svg')}}") no-repeat 10px 9px;
	margin-left:20px;
	vertical-align:center;
	font-weight:400;
}

/*----------------------------*/
/* SEARCH */
/*----------------------------*/

#main_tip_search{
	float:right;
	width:170px;
	margin-top:13px;
	height:auto;
	margin-right:25px;
	display:block;
}

#tip_search_input{
    font: 16px/1.6 'Roboto',sans-serif;
	color: #686868;
	padding: 4px 4px 4px 46px;
	width: 170px;
	border:solid 1px #FFF;
	border-radius: 5px;
	-moz-appearance: none;
	-webkit-appearance: none;
    box-shadow: none; 
	outline: 0;
	margin: 0;
	background: url("{{asset('img/icon-search.svg')}}") no-repeat 12px 7px;
	vertical-align:center;
	margin-left:-40px;
	background-color:#FFF;
}

#loupe{
	position:absolute;
	background: url("{{asset('img/loupe.svg')}}") no-repeat;
	width:28px;
	height:30px;
	right:20px;
	top:94px;
	cursor:pointer;
	opacity:1;
}

/*----------------------------*/
/* COPYRIGHT PART IN BLACK DOWN*/
/*----------------------------*/

#wrapper-copyright{
	float:left;
	width:100%;
	height:70px;
	background-color:#2E2D30;
}

.copyright{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.copy-text{
	float:left;
	text-align:left;
	font-family: 'Roboto',sans-serif;
    font-size: 15px;
	height:70px;
	line-height:70px;
	cursor:pointer;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#666;
	margin-left:15px;
	font-weight:500;
}

.wrapper-navbouton{
	position:absolute;
	height:100%;
	right:0;
}

.google,.facebook,.dribbble,.linkin{
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	text-align:right;
	font-family:'socialicoregular';
    font-size: 44px;
	height:70px;
	line-height:70px;
	float:right;
	opacity:0.5;
	cursor:pointer;
	float:right;
	color:#666;
	opacity:1;
}

.dribbble,.facebook,.linkin,.google{padding-right:20px;}
.dribbble,.facebook,.linkin{padding-right:12px;}

.linkin:hover,.google:hover,.facebook:hover,.dribbble:hover{color:#CCC;transform: scale(1.2);}

/*----------------------------*/
/* RWD */
/*----------------------------*/

/* Others wide screen -2 */
 
@media only screen and (max-width: 2000px) {
#main-container-menu {
	display:none;
}
}

/* Others wide screen */
 
@media only screen and (max-width: 1200px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:940px;
	margin-left:-465px;
}
#main-container-menu {
	display:none;
}
}

/* Small viewports — Old monitors, netbooks, tablets (landscape), etc. */
 
@media only screen and (max-width: 965px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:835px;
	margin-left:-417.5px;
}
#main-container-menu {
	display:none;
}
#row-1f,#row-2f,#row-3f,#row-4f{
	width:100%;
}
.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
	text-align:center;
	width:70%;
	margin-left:15%;
}
.text-row-1f{
	margin-top:75px;
	margin-bottom:35px;
}
.text-row-4f{
	margin-top:0;
	margin-bottom:0;
}
.text-row-2f,.text-row-3f{
	margin-bottom:35px;
	margin-top:0;
}
#tip_newsletter_input{
	position:relative;
	left:50%;
	margin-left:-112.5px;
	margin-bottom:75px;
}
.work figure,.post-reply,.post-reply-2,.title-item,.post-send {
	margin-left:15px;
}
.wrapper-text-description{
	right:15px;
	width:30%;
}

}

/* Smaller viewports — more tablets, old monitors */
 
@media only screen and (max-width: 860px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:715px;
	margin-left:-357.5px;
}
#main-container-menu {
	display:none;
}
.part-info-image-single{
	margin-bottom:11px;
}

}

/* Even smaller viewports — more tablets, etc. */
 
@media only screen and (max-width: 740px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:585px;
	margin-left:-292.5px;
}   
#wrapper-bouton-icon,#main_tip_search,#text-search {
	display:none;
}
#stripes {
	display:block;
}
#main-container-menu {
	display:block;
}
.work figure {
	width:calc(100% - 30px);
	margin-left:15px;
}
.wrapper-text-description{
	width:calc(100% - 30px);
	float:left;
	position: relative;
	right:0;
	margin-left:15px;
	margin-top:25px;
}
.image-morefrom-1 img,.image-morefrom-2 img,.image-morefrom-3 img,.image-morefrom-4 img{
	width:90%;
	height:auto;
	margin-left:5%;
	padding-bottom:5%;
	padding-top:5%;
}
.post-send,.post-reply,.post-reply-2{
	width:calc(100% - 30px);
	margin-left:15px;
}
}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 610px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:455px;
	margin-left:-227.5px;
} 
#wrapper-sorting{
	position:relative;
	width:300px;
	left:50%;
	margin-left:-165px;
}
.top-rated,.recent,.oldies{
	text-align:center;
	font-family: 'Roboto',sans-serif;
    font-size: 13px;
	height:40px;
	line-height:40px;
	margin-left:25px;
}
.part-info-image-single{
	float:left;
	margin-bottom:17px;
}
#wrapper-part-info .part-info-image img{
	height:92%;
	width:92%;
	margin-left:4%;
}
.work figure img {
    height: 92%;
    width: 92%;
	margin-left:4%;
	margin-top:4%;
}

}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 480px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:295px;
	margin-left:-147.5px;
}
.work figure {
	width:calc(100% - 30px);
}
.wrapper-navbouton{
	display:none;
}
.copy-text{
	text-align:center;
	width:100%;
}
.thank-text{
    font-size: 50px;
}
.title-item{
	width:calc(100% - 30px);
	margin-left:15px;
}
.title-icon{
	margin-right:10px;
}
.title-text{
    font-size: 22px;
	width:100%;
	margin-top:8px;
}
.part-info-image-single{
	float:left;
	margin-bottom:15px;
}
#wrapper-part-info .part-info-image img{
	height:90%;
	width:90%;
	margin-left:5%;
}
.work figure img {
    height: 90%;
    width: 90%;
	margin-left:5%;
	margin-top:5%;
}

.name-reply-post,.name-reply-post-2{
	width:calc(100% - 75px);
	padding-left:10px;
}

.text-reply-post,.text-reply-post-2{
	margin-left:15px;
	width:calc(100% - 30px);
	padding-top:0;
	padding-left:0;
	padding-right:0;
	padding-bottom:25px;
	margin-top:20px;
}

.post-reply-2{margin-top:25px;}

#main-post-send{
	width:calc(100% - 30px);
	margin-left:15px;
}

textarea {
	width: calc(100% + 15px);
}
}
/* Mobile phones (iphone4/5)*/
 
@media only screen and (max-width: 320px) {

}



</style>

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

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

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object">
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

            <div id="wrapper-title-3">
            <a href="#"><div class="oldies object">Publica un Proyecto</div></a>
            </div>
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
                <div class="premium-ressource"><a href="#">Premium Resources</a></div>
            </div>
            
            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>
            
            <div id="main-psd">
                <div class="psd"><a href="#">PSD Goodies</a></div>
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
    
		<div class="container object">

			<div id="main-container-image">
            	
                <div class="title-item">
                	<div class="title-icon"></div>
                    <div class="title-text">Pied Piper</div>
					<div class="title-text-2">Richard Hendricks</div>
					
					
                </div>
				
				<div class="title-item">
				
				
				<?php
          		$newDate1 = date("d/m/Y", strtotime($proyecto->fechainicio));
				?>
				
					<div class="title-text-2">Fecha de inicio: {{$newDate1}}</div>
						
					</div>
     			       
				
				<div class="work">
					<figure class="white">
							 <img src="{{asset('img/mobile_pied_piper.jpg')}}" alt="" width="628" height="437"/> <!-- Imagen principal -->
                         <div id="wrapper-part-info">
                             <div class="part-info-image-single">
                              <img src="{{asset('img/pied_piper_compress1.jpg')}}" alt="" width="628" height="437"/>
                                <img src="{{asset('img/silicon-valley.jpg')}}" alt="" width="628" height="437"/>
                                
                             </div>
						 </div>
                    </figure>	
				
                <div class="wrapper-text-description">
                <!-- 
                	<div class="wrapper-view">
                    	<div class="icon-view"><img src="{{asset('img/icon-eye.svg')}}" alt="" width="24" height="16"/></div>
                        <div class="text-view">2,451 visitas</div>
                    </div> -->
                
                	<div class="wrapper-file">
                    	<div class="icon-file"><img src="{{asset('img/icon-psdfile.svg')}}" alt="" width="21" height="21"/></div>
                        <div class="text-file">Categoria</div>
                    </div>
                    
                    
                    <div class="wrapper-desc">
                    	<!--<div class="icon-desc"><img src="img/icon-doc.png" alt="" width="24" height="24"/></div>-->
                        <div class="text-desc">
							Debajo de las llamativas páginas de inicio de sus sitios favoritos, se esconden Hooli ™ y otras
							corporaciones malvadas que acaparan y venden sus datos más personales.
							
							Lo que se creó para ser la plataforma definitiva para el intercambio libre de conocimiento
							se ha convertido en un monstruo sediento de dinero que se deleita con nuestra privacidad y libertad.
							
							Pero no temas, ¡porque Pied Piper tiene la respuesta! Y es simple:
							Una red autónoma punto a punto que presenta almacenamiento distribuido con tecnología de
							compresión universal, asignación acelerada de programación y encriptación de extremo a extremo.
							
							Ponga aún más simple: es internet, completamente descentralizado. </div>
                    </div>
                    
                    <div class="wrapper-download">
						<div class="icon-download"><img src="{{asset('img/donate.png')}}" alt="" width="19" height="26"/></div>
						
                        <div class="text-download"><a href="compra.php"><b>Donar</b></a></div>
                    </div>
                    
                    <div class="wrapper-morefrom">
                    	<div class="text-morefrom">Otros proyectos</div>
                        <div class="image-morefrom">
                        	<a href="#"><div class="image-morefrom-1"><img src="{{asset('img/psd-1.jpg')}}" alt="" width="430" height="330"/></div></a>
                            <a href="#"><div class="image-morefrom-2"><img src="{{asset('img/psd-2.jpg')}}" alt="" width="430" height="330"/></div></a>
                            <a href="#"><div class="image-morefrom-3"><img src="{{asset('img/psd-3.jpg')}}" alt="" width="430" height="330"/></div></a>
                            <a href="#"><div class="image-morefrom-4"><img src="{{asset('img/psd-6.jpg')}}" alt="" width="430" height="330"/></div></a>
                        </div>
                    </div>
                    
                </div>
  							</form>
                        </div>
					</div>
                </div>
			</div>	
		</div>
         
            
	<!--<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
    	</div>
	</div>-->
	    
	<div id="main-container-footer" >
		<div class="container-footer">
        	
             <div id="row-1f">
            	<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Burstfly</span><br>Burstfly is just a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
            </div>
            
            <div id="row-2f">
            	<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Burstfly offers you all the latest freebies found all over the fourth corners without to pay.</div>
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

	<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flip.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>    
	
	<script>
	

	
$(document).ready(function() {
		$.localScroll();
		$(".cache").delay(1000).fadeOut(500);
		
		$("#wrapper-header").delay(1500).animate({opacity:'1',width:'100%'},500);
		$("#wrapper-navbar").delay(2000).animate({opacity:'1',height:'60px'},500);
		
		$("#main-container-image").delay(2500).animate({opacity:'1'},500);
		
	});

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
	timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);
 
  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);	
}); 

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);	
}); 

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});


/* BOUTON PREV */

$(document).on('touchstart mouseover', '#logo', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#logo").stop().animate({scale:'1.1',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#logo', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#logo").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});



/*FORMULAIRE NEWSLETTER*/
	
$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("'{{asset('/burstfly/form-burstfly-modified.asp')}}",$("form").serialize(), function(data) {//alert(data);
	});
});

</script>


</body>


</html>
