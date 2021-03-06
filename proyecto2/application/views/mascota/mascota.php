<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Publicar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider -->
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts -->
<script src="js/owl.carousel.js"></script>
<script>
$(document).ready(function() {
	$("#owl-demo").owlCarousel({
	  autoPlay: 3000, //Set AutoPlay to 3 seconds
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true

	});
});
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>
</head>
<body>

	<script>
		$('#myModal88').modal('show');
	</script>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one-->
			<div class="w3ls-header-left">
				<p><a href="#"> </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My cuenta<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="home">Salir </a></li>

						</ul>
					</li>



				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a><span>AVE</span>inmobiliaria <i></i></a></h1>
					<h6>para comprar.tu hogar.</h6>
				</div>
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Buscar" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart">
					<div class="my-account">
						<a href="contact"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTÁCTENOS</a>
					</div>
					<div class="cart">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="menu">

						<a class="btn btn-primary" href="home">HOME</a>


					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="menu">
					<div class="menu">

						<a class="btn btn-primary" href="nosotro">NOSOTROS</a>


					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="menu">
					<div class="menu">

						<a class="btn btn-primary" href="publicacion">PUBLICACION</a>


					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="menu">
					<div class="menu">

						<a class="btn btn-primary" href="mascota">PUBLICAR</a>


					</div> <!-- .cd-dropdown-wrapper -->
				</div>

			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- sign up-page -->
	
		<div class="container">
			
			<body>



  <div class="container">
  <center><h3>publicar Inmueble</h3></center>

  
    <div class="row">

    <form method="post" autocomplete="off" action="<?php echo base_url('mascota/guardar');?>">
      <div class="col-md-6">

        <div class="form-group input-group" >
          <span class="input-group-addon">Id:</span>
          <input type="text" readonly class="form-control" value="<?php echo $mascota->id; ?>" name="id">
        </div>


        <div class="form-group input-group">
          <span class="input-group-addon">Titulo:</span>
          <input type="text" class="form-control" name="titulo" autofocus="on" value="<?php echo $mascota->titulo; ?>">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Direccion</span>
          <input type="text" class="form-control" name="direccion" autofocus="on" value="<?php echo $mascota->direccion; ?>">
        </div>

        
		<div class="input-group form-group">
      		<span class="input-group-addon">Tipo</span>
      		<select name="tipo" autofocus="on" class="form-control" value="<?php echo $mascota->tipo; ?>">
      			<option value="">seleccionar</option>
      			<option value="categoria">casa</option>
      			<option value="categoria">finca</option>
				<option value="categoria">solar</option>
      			<option value="categoria">apartamento</option>
      		</select>
      	</div>
		
        <div class="form-group input-group">
          <span class="input-group-addon">Precio:</span>
          <input type="text" class="form-control" name="precio" autofocus="on" value="<?php echo $mascota->precio; ?>">
        </div>
		
		<div class="input-group form-group">
      		<span class="input-group-addon">Accion</span>
      		<select name="accion" autofocus="on" class="form-control" value="<?php echo $mascota->accion; ?>">
      			<option value="">seleccionar</option>
      			<option value="categoria">Vender</option>
      			<option value="categoria">Alquilar</option>
      		</select>
      	</div>
		
		<div class="form-group input-group">
          <span class="input-group-addon">Descripcion:</span>
          <input type="text" class="form-control" name="descripcion" autofocus="on" value="<?php echo $mascota->descripcion; ?>">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Foto:</span>
          <input type="file" class="form-control" name="foto[]" autofocus="on" value="<?php echo $mascota->foto; ?>" multiple>
        </div>
		
		<head>
             <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
             <title>Google Maps Geoposicionamiento</title>

             <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

             <style>

             #map
             {
                 width: 100%;
                 height: 300px;
                 border: 1px solid #d0d0d0;
             }

             </style>
      <script>
      function localize()
       {
         if (navigator.geolocation)
         {
                   navigator.geolocation.getCurrentPosition(mapa,error);
               }
               else
               {
                   alert('Tu navegador no soporta geolocalizacion.');
               }
       }

       function mapa(pos)
       {
       /************************ Aqui están las variables que te interesan***********************************/
         var latitud = pos.coords.latitude;
         var longitud = pos.coords.longitude;
         var precision = pos.coords.accuracy;

         var contenedor = document.getElementById("map")

         var centro = new google.maps.LatLng(latitud,longitud);

         var propiedades =
         {
                   zoom: 15,
                   center: centro,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
         };

         var map = new google.maps.Map(contenedor, propiedades);

         var marcador = new google.maps.Marker({
                   position: centro,
                   map: map,
                   title: "Tu posicion actual"
               });
       }

       function error(errorCode)
       {
         if(errorCode.code == 1)
           alert("No has permitido buscar tu localizacion")
         else if (errorCode.code==2)
           alert("Posicion no disponible")
         else
           alert("Ha ocurrido un error")
       }
    </script>
         </head>

         <body onLoad="localize()">
             <label for="imagen">Seleccionar ubicacion</label>
                 <div id="map" ></div>
         </body>
		
		
		<br>
		
        <div class="text-center">
          <button type="submit" class="btn btn-primary">guardar</button>
        </div>

    </div>
    </form>
  </div>


    <div>

     <h3>Registro de inmuebles</h3>
     <table class="table">
       <thead>
         <tr>
           <th> Id </th>
           <th> Titulo </th>
           <th> Direccion </th>
           <th> Tipo </th>
           <th> Precio </th>
           <th> Accion </th>
           <th> Descripcion </th>
           <th> Foto </th>
          

           <td>
             --
           </td>
         </tr>
       </thead>
       <tbody>

         <?php
              foreach($mascotas as $mascota){

                $linkEdit = base_url("mascota/?id={$mascota->id}");
                $linkDel = base_url("mascota/delete/?id={$mascota->id}");


                echo "
                  <tr>
                    <td>{$mascota->id}</td>
                    <td>{$mascota->titulo}</td>
                    <td>{$mascota->direccion}</td>
                    <td>{$mascota->tipo}</td>
                    <td>{$mascota->precio}</td>
                    <td>{$mascota->accion}</td>
                    <td>{$mascota->descripcion}</td>
                    <td>{$mascota->foto}</td>
                   

                    <td>
                        <a href= '$linkEdit' class= 'btn btn-info btn-sm'> Edit</a>
                        <a href= '$linkDel' class= 'btn btn-danger btn-sm' >Del</a>
                    </td>

                </tr>";
              }

         ?>

       </tbody>
     </table>
   </div>
  </div>



 

  </body>

		</div>
	
	<!-- //sign up-page -->
	<!-- footer-top -->
		<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>SEGURIDAD</h4>
						<p>No importa donde estes con ave puede negociar desde cualquier lugar</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>PERSONAL</h4>
						<p>Altamente calificado para atender la atencion del cliente </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>AVE</h4>
						<p>La mejor opcion para hacer tu negocio</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Buscanos en:</h4>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li>
				</ul>
				<ul class="apps">
					<li><h4>Descarga la app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a><span>AVE</span>contact</a></h2>

					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 La caleta , Rep.Dom.</li>
						<li><i class="fa fa-mobile"></i> 829 632 9225 </li>
						<li><i class="fa fa-phone"></i> +829 691 3194 </li>
						<li><i class="fa fa-envelope-o"></i> <a> AVEinmobiliaria@gmal.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a>About Us</a></li>

							<li><a>Core Values</a></li>
							<li><a>Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Servicios</h3>
						<ul>
							<li><a>Contact Us</a></li>
							<li><a>Site Map</a></li>

						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Metodo De Pago</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Pago contra entrega</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>Conversión de EMI</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-cheques regalo</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Tarjeta de crédito débito</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<div class="copy-right">
		<div class="container">
			<p>© 2016 Inmobiliaria AVE <a href="http://w3layouts.com"> </a></p>
		</div>
	</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>
	<!-- //cart-js -->
	<!-- countdown.js -->
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
