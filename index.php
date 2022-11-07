<?php $active = 'inicio'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ASERSA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">

    

	<?php //include_once('partials/metas.php'); ?>
	<?php include_once('partials/styles.php'); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/css/jquery.mb.YTPlayer.min.css" />
	
	<!-- Código de instalación Cliengo para http://www.sli.mx/ -- <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/611be3f3573407002ae0c7ef/61295f7a9a88bf002a314e24.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>-->
</head>
<body>
	<?php include_once('partials/header.php'); ?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner bg-dark" id="intro">
			<div class="carousel-item active">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/asersa/slider/slider1-movil.jpg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/asersa/slider/slider1.jpg" class="w-100">
		          	<img src="img/asersa/slider/slider1.jpg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/asersa/slider/slider2-movil.jpg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/asersa/slider/slider2.jpg" class="w-100">
		          	<img src="img/asersa/slider/slider2.jpg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/asersa/slider/slider3-movil.jpg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/asersa/slider/slider3.jpg" class="w-100">
		          	<img src="img/asersa/slider/slider3.jpg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item" data-interval="20000" data-pause="hover">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/asersa/slider/slider4-movil.jpg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/asersa/slider/slider4.jpg" class="w-100">
		          	<img src="img/asersa/slider/slider4.jpg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item" data-pause="true">
				<picture style="opacity: 0">
		         	<source media="(max-width: 799px)" srcset="img/asersa/slider/slider4-movil.jpg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/asersa/slider/slider4.jpg" class="w-100">
		          	<img src="img/asersa/slider/slider4.jpg" alt="" class="w-100">
		        </picture>
			</div>
		</div>
		<!-- Video Mecanica Prueba: aT3Ajznq0Po  
			Video SLI: DMwMJaCadF0-->
		<div id="video" data-property="{videoURL:'aT3Ajznq0Po', containment:'#intro', autoPlay:true, mute:true, startAt:0, opacity:.8, loop:true, optimizeDisplay: true, stopMovieOnBlur:false, showControls:false, addRaster:true, mask:'https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/css/images/raster@2x.png', useOnMobile:true }"></div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<section class="section-intro section-parallax d-flex align-items-center justify-content-center padding" data-image-src="img/parallax01.jpeg" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-z-ndex="-100" data-natural-width="1920" data-natural-height="1080">
		<div class="container" data-entrance="from-left" data-entrance-delay="100">
			<div class="row">
				<div class="col-12 col-md-6 mb-3 mb-md-0">
					<!-- Imagen de quienes somo justo debajo del banner por la izquierda -->
					<img src="img/asersa/quienes somos.webp" alt="¿Quiénes somos?" height="200px" class="border-20 shadow" >
				</div>
				<div class="col-12 col-md-6">
					<div>
					</div>

					<div id="slideEmpresa" class="carousel slide mt-5" >
						<div class="carousel-inner">
							<div class="carousel-item active">
								<h3 class="rojo f800 text-uppercase">¿Quiénes somos?</h3>
								
								<p class="text-justify">
									<span class="f600">ASERSA</span> es tu aliado mecánico. Tenemos la mejor capacidad de respuesta y la mejor atención a tus necesidades ya sean de mantenimiento de vehículos de cargas pesadas como la venta de refacciones para los mismos
								</p>

							</div>
							<div class="carousel-item ">
								<h3 class="rojo f800 text-uppercase">Valores</h3>
								<p class="text-justify">
									- Responsabilidad <br>
									- Honestidad <br>
									- Humildad <br>
									- Congruencia <br>
									- Respeto <br>
									- Empatía
								</p>
							</div>
							<div class="carousel-item">
								<h3 class="rojo f800 text-uppercase">Misión</h3>
								<p class="text-justify">
									Ser la mejor opción para nuestros clientes, colaboradores y socios comerciales, en el rubro de mantenimiento vehicular a nivel local y nacional a través de nuestros socios comerciales, diferenciados por la calidad de nuestros servicios, competitividad de nuestro personal, infraestructura, vanguardia en tecnología automotriz y compromiso con el medio ambiente.
								</p>
							</div>
							<div class="carousel-item">
								<h3 class="rojo f800 text-uppercase">Visión</h3>
								<p class="text-justify">
									Brindar la mejor calidad en nuestros servicios de mantenimiento vehicular, conservando las unidades de nuestros clientes en un estado de operación eficiente y seguro, satisfaciendo las necesidades de cada uno de nuestros clientes en tiempo y costo apoyados de nuestros pilares.
								</p>
							</div>
						</div>
						<ul class="empresa-nav d-flex flex-column justify-content-between align-items-center flex-md-row align-items-md-between">
							<li data-target="#slideEmpresa" data-slide-to="0" class="mb-2 active">¿Quienes somos?</li>
							<li data-target="#slideEmpresa" data-slide-to="1" class="mb-2">Valores</li>
							<li data-target="#slideEmpresa" data-slide-to="2" class="mb-2">Misión</li>
							<li data-target="#slideEmpresa" data-slide-to="3" class="mb-2">Visión</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row text-center mt-5 justify-content-center">
				<div class="col-12 my-5">
					<h2 class="f800 text-uppercase rojo">Propuesta de valor</h2>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/confianza.png" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3">Confianza</p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/respuesta.png" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3">Gran capacidad <br>de respuesta</p>
				</div>
			</div>

			<div class="text-center mt-5 d-flex flex-column align-items-center">
				<a href="https://www.youtube3.com/watch?v=DMwMJaCadF0" class="btn bg-rojo rounded-pill text-white mb-4 video-iframe px-5 py-2 f800" hidden>
					Ver video
				</a>
				<a href="https://www.youtube3.com/watch?v=DMwMJaCadF0" class="video-iframe" hidden>
					<img src="img/video.png 2" class="img-fluid" alt="Youtube video.mp4">
				</a>
			</div>
		</div>
	</section>

	<section class="section-tipos-servicios padding bg-gris-oscuro">
		<div class="container" data-entrance="from-left" data-entrance-delay="100">
			<div class="text-center">
				<h2 class="f800 rojo text-uppercase">Tipos de servicios</h2>
			</div>
			<div class="row mt-5 d-flex justify-content-center">
				<!-- <div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						Carga general <br>y refrigerada
					</p>
					<img src="img/tipos-servicios-01.png" class="img-fluid" alt="">
				</div> -->
				<div class="item col-12 col-md-6 my-4 justify-content-center">
					<p class="h3 f800 text-white text-uppercase text-center cc d-block">
						<!--Jaulas <br>graneleras--> Reparaciones
					</p>
					<img class="d-block m-auto" src="img/asersa/Tipo de servicios/Reparacion.jpg" alt="" srcset="" style="border-radius: 20px; box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -webkit-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -moz-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49);" height="300px">
					<!--<img src="img/tipos-servicios-03.png 1" class="img-fluid" alt="IMG 1">-->
				</div>
				<div class="item col-12 col-md-6 my-4 justify-content-center" >
					<p class="h3 f800 text-white text-uppercase text-center cc d-block">
						<!--Tolvas de <br>descarga baja de <br>acero inoxidable-->
						Venta de <br> Refacciones
					</p>
					<img class="d-block m-auto" src="img/asersa/Tipo de servicios/venta.png" alt="" srcset="" style="border-radius: 20px; box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -webkit-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -moz-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49);" height="300px">
					<!--<img src="img/tipos-servicios-04.png 1" class="img-fluid" alt="IMG 2">-->
				</div>
				<!--<div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						<!--Cajas <br>secas--
					</p>
					<img src="img/tipos-servicios-05.png 1" class="img-fluid" alt="IMG 3">
				</div>
				<div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						<!--Tolvas <br>de volteo--
					</p>
					<img src="img/tipos-servicios-06.png 1" class="img-fluid" alt="IMG 4">
				</div>
				<div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						<!--Porta <br>contenedores--
					</p>
					<img src="img/tipos-servicios-02.png 1" class="img-fluid" alt="IMG 5">
				</div>-->
			</div>
		</div>
	</section>

	<section class="section-ventajas padding">
		<div class="container" data-entrance="from-left" data-entrance-delay="100">
			<div class="text-center">
				<h2 class="text-uppercase f800 rojo">¿Por qué elegirnos?</h2>
				<p class="text center py-4 max700 mx-auto text-justify"> 
					Somos una empresa comprometida con la innovación y el servicio a bien del consumidor, 
					todos nuestros productos son importados y de primera calidad con el fin de ofrecer 
					el mejor servicio posible a nuestros clientes 
				</p>
				<p class="h5 text-uppercase f800 rojo py-4 d-block">
					Ventajas de elejirnos:
				</p>
			</div>
			<div class="row text-center mt-5 d-flex justify-content-center">
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/asersa/Detalles/experiencia.jpg" class="img-fluid rounded shadow" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						Experiencia
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4">Experiencia</h4>
						<p class="text-white text-justify">
							Nos aseguramos que todas las necesidades de reparación y tractoservicios sean cubiertas al contactar con nosotros
						</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/asersa/Detalles/servicio.jpg" class="img-fluid rounded shadow" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						Servicios
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4">Servicios</h4>
						<p class="text-white text-justify">
							Estamos comprometidos a ofrecer servicios de mantanimiento a tractovehículos, así como ofrecer lo mejor en refacciones de primera calidad
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-numeralia bg-light padding">
		<div class="container" data-entrance="from-left" data-entrance-delay="100">
			<h2 class="f800 text-center text-uppercase">SERVICIOS:</h2>
			<div class="row mt-5 text-center justify-content-center ">
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/escaner.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Escaneo y <br> daignóstico</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/frenos.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Frenos</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/suspensión.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Suspensión</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/reparacion motor.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Reparación <br> de motor <br> de Diesel</p>
				</div>
			</div>
			<div class="row mt-5 text-center justify-content-center ">
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/transmision manual.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Transmisiones <br> manuales</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/mantenimiento.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Mantenimiento <br> preventivo</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/aceite.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Engrasado</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/electrico.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Sistema electrico <br> y electrónico</p>
				</div>
			</div>
			<div class="row mt-5 text-center justify-content-center ">
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/vulcanizado.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Vulcanizadora</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/asistencia vial.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Asistencia vial 24/7</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/mofles.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Mofles</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/alineacion balanceo.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Alineación y balanceo</p>
				</div>
			</div>
			<div class="row mt-5 text-center justify-content-center ">
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/hojalateria pintura.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Hojalateria y pintura</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/aire acondicionado.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Aire acondicionado</p>
				</div>
				<div class="col-3 col-md-2 mb-3 mb-md-0 mx-4">
					<img class="img-fluid icono" src="img/asersa/Icons/lavado.png" alt="MARCA">
					<p class="f800 text-uppercase mt-3">Lavado de chasis, carrocería, motor, vestiduras, sanitización</p>
				</div>
			</div>
		</div>
	</section> 

	<section class="section-numeralia bg-light padding">
		<div class="container" data-entrance="from-left" data-entrance-delay="100">
			<h2 class="f800 text-center text-uppercase">Multi marca:</h2>
			<div class="row mt-5 text-center justify-content-center">
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen2.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen3.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen4.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen5.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen6.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen7.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen8.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen9.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen10.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen11.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen12.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen13.png" alt="MARCA">
				</div>
				<div class="col-12 col-md-3 mb-3 mb-md-0">
					<img class="img-fluid" src="img/asersa/marcas/Imagen14.png" alt="MARCA">
				</div>
			</div>
		</div>
	</section> 

	<?php include_once('partials/footer.php'); ?>
	<?php include_once('partials/scripts.php'); ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/jquery.mb.YTPlayer.min.js"></script>
	<script>
		$(function(){
			/*----------  Video Intro  ----------*/
			$("#video").YTPlayer();
		});
	</script>
</body>
</html>