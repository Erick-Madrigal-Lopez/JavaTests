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
		         	<source media="(max-width: 799px)" srcset="img/slider/01-movil.jpeg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/slider/01.jpeg" class="w-100">
		          	<img src="img/slider/01.jpeg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/slider/02-movil.jpeg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/slider/02.jpeg" class="w-100">
		          	<img src="img/slider/02.jpeg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/slider/03-movil.jpeg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/slider/03.jpeg" class="w-100">
		          	<img src="img/slider/03.jpeg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item" data-interval="20000" data-pause="hover">
				<picture>
		         	<source media="(max-width: 799px)" srcset="img/slider/04-movil.jpeg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/slider/04.jpeg" class="w-100">
		          	<img src="img/slider/04.jpeg" alt="" class="w-100">
		        </picture>
			</div>
			<div class="carousel-item" data-pause="true">
				<picture style="opacity: 0">
		         	<source media="(max-width: 799px)" srcset="img/slider/04-movil.jpeg" class="w-100">
		          	<source media="(min-width: 800px)" srcset="img/slider/04.jpeg" class="w-100">
		          	<img src="img/slider/04.jpeg" alt="" class="w-100">
		        </picture>
			</div>
		</div>
		<div id="video" data-property="{videoURL:'DMwMJaCadF0', containment:'#intro', autoPlay:true, mute:true, startAt:0, opacity:.8, loop:true, optimizeDisplay: true, stopMovieOnBlur:false, showControls:false, addRaster:true, mask:'https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/css/images/raster@2x.png', useOnMobile:true }"></div>
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
		<div class="container" data-entrance="from-right" data-entrance-delay="100">
			<div class="row">
				<div class="col-12 col-md-6 mb-3 mb-md-0">
					<!-- Imagen de quienes somo justo debajo del banner por la izquierda -->
					<img src="img/asersa/quienes somos.webp" alt="¿Quiénes somos?" height="200px" class="border-20 shadow" >
				</div>
				<div class="col-12 col-md-6">
					<div>
<!-- imagenes de certificacion iso
						<img src="img/iso01.png" class="img-fluid mr-2" alt="">
						<img src="img/iso02.png" class="img-fluid" alt="">
-->
					</div>

					<div id="slideEmpresa" class="carousel slide mt-5" >
						<!-- <ol class="carousel-indicators">
							<li data-target="#slideEmpresa" data-slide-to="0" class="active"></li>
							<li data-target="#slideEmpresa" data-slide-to="1"></li>
							<li data-target="#slideEmpresa" data-slide-to="2"></li>
						</ol> -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<h3 class="rojo f800 text-uppercase">¿Quiénes somos?</h3>
								
								<p>
									<span class="f600">ASERSA</span> es tu aliado mecánico. Tenemos la mejor capacidad de respuesta y la mejor atención a tus necesidades ya sean de mantenimiento de vehículos de cargas pesadas como la venta de refacciones para los mismos
								</p>

							</div>
							<div class="carousel-item">
								<h3 class="rojo f800 text-uppercase">Valores</h3>
								<p>
									- Servicio <br>
									- Excelencia <br>
									- Honestidad <br>
									- Eficiencia <br>
									- Innovación
								</p>
							</div>
							<div class="carousel-item">
								<h3 class="rojo f800 text-uppercase">Misión</h3>
								<!--<p>
									Somos un grupo de empresas que brindamos soluciones logísticas inteligentes, creadas para satisfacer las necesidades de nuestros clientes y asociados, mediante la integración eficiente de la red de valor.
								</p>-->
							</div>
							<div class="carousel-item">
								<h3 class="rojo f800 text-uppercase">Visión</h3>
								<!--<p>
									En 2025 ser la integradora de soluciones logisticas mas innovadora de México, agregando valor a nuestros clientes, colaboradores y socios de negocio.
								</p>-->
							</div>
						</div>
						<ul class="empresa-nav d-flex flex-column justify-content-between align-items-center flex-md-row align-items-md-between">
							<li data-target="#slideEmpresa" data-slide-to="0" class="mb-2 active">¿Quienes somos?</li>
							<li data-target="#slideEmpresa" data-slide-to="1" class="mb-2">Valores</li>
							<li data-target="#slideEmpresa" data-slide-to="2" class="mb-2">Misión</li>
							<li data-target="#slideEmpresa" data-slide-to="3" class="mb-2">Visión</li>
						</ul>
						<!-- <a class="carousel-control-prev" href="#slideEmpresa" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#slideEmpresa" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> -->
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
				<!--
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/seguimiento.png 3" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3"><--Seguimiento en <br>tiempo real</p>--
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/soluciones.png 3" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3"><--Soluciones <br>inteligentes</p>--
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/capacidad.png 3" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3"><--Gran capacidad <br>de carga</p>--
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<img src="img/icons/cobertura.png 3" class="img-fluid" alt="">
					<p class="h5 f800 text-uppercase mt-3"><--Cobertura <br>Geográfica</p>--
				</div>-->
			</div>

			<div class="text-center mt-5 d-flex flex-column align-items-center">
				<a href="https://www.youtube3.com/watch?v=DMwMJaCadF0" class="btn bg-rojo rounded-pill text-white mb-4 video-iframe px-5 py-2 f800" >
					Ver video
				</a>
				<a href="https://www.youtube3.com/watch?v=DMwMJaCadF0" class="video-iframe">
					<img src="img/video.png 2" class="img-fluid" alt="Youtube video.mp4">
				</a>
			</div>
		</div>
	</section>

	<section class="section-tipos-servicios padding bg-gris-oscuro">
		<div class="container">
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
				<div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						<!--Jaulas <br>graneleras--> Reparaciones
					</p>
					<img src="img/asersa/Tipo de servicios/Reparacion.jpg" alt="" srcset="" style="border-radius: 20px; box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -webkit-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -moz-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49);" height="300px">
					<!--<img src="img/tipos-servicios-03.png 1" class="img-fluid" alt="IMG 1">-->
				</div>
				<div class="item col-12 col-md-6 my-4">
					<p class="h3 f800 text-white text-uppercase">
						<!--Tolvas de <br>descarga baja de <br>acero inoxidable-->
						Venta de <br> Refacciones
					</p>
					<img src="img/asersa/Tipo de servicios/venta.png" alt="" srcset="" style="border-radius: 20px; box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -webkit-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49); -moz-box-shadow: 6px 13px 39px -2px rgba(0,0,0,0.49);" height="300px">
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
		<div class="container">
			<div class="text-center">
				<h2 class="text-uppercase f800 rojo">¿Por qué elegirnos?</h2>
				<p class="text center py-4 max700 mx-auto"> 
					Somos una empresa comprometida con la innovación y el servicio a bien del consumidor, <br>
					todos nuestros productos son importados y de primera calidad con el fin de ofrecer <br>
					el mejor servicio posible a nuestros clientes 
					<!--
					Combinamos una robusta <span class="f600">infraestructura logística, innovación tecnológica y un gran equipo humano</span> para hacer cada traslado lo más seguro y eficiente posible.
				--></p>
				<p class="h5 text-uppercase f800 rojo py-4 d-block">
					<!-- SLI ofrece las siguientes ventajas:-->
					Descripción
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
						<p class="text-white">
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
						<p class="text-white">
							Estamos comprometidos a ofrecer servicios de mantanimiento a tractovehículos, así como ofrecer lo mejor en refacciones de primera calidad
						--></p>
					</div>
				</div>
				<!--<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/calidad-y-procesos.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Transporte <br>multimodal-- Título
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Transporte <br>multimodal-- Título </h4>
						<p class="text-white">Contenido<!--
							Como empresa multimodal, integramos los servicios <span class="f600 text-white">marítimo, ferroviario y autotransporte,</span> garantizando el envío de su producto a cualquier parte del país.--
						</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/cobertura-nacional.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Cobertura <br>nacional-- Título
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Cobertura <br>nacional-- Título</h4>
						<p class="text-white">Contenido<!--
							Tenemos sucursales en los puntos estratégicos más importantes del país, con ejecutivos especializados en los diferentes canales de servicio.
						--</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/tarifas-competitivas.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Tarifas Competitivas-- Titulo
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Tarifas <br>Competitivas-- Titulo</h4>
						<p class="text-white"> Contenido<!--
							Gracias a nuestra cobertura nacional, infraestructura y tecnologías aplicadas nos reafirmamos como la empresa transportista que ofrece las mejores tarifas del mercado.--
						</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/tecnologia-de-vanguardia.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Tecnología de vanguardia-- Titulo
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Tecnología de <br>vanguardia-- Titulo</h4>
						<p class="text-white">
							<!--SLI integra sistemas de útlima generación tanto para el monitoreo GPS de unidades, controles de seguridad en ruta y patios así como sistemas Web App y Apps para gestión y administración que permiten a nuestros clientes consultar en tiempo real el status de sus rutas así como su historial.-- Contenido
						</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/equipo-vehicular.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Equipo <br>vehicular-- Titulo
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Equipo <br>vehicular-- Titulo</h4>
						<p class="text-white">
							Contenido
							<!--Contamos con los modelos más recientes de portacontenedores, cajas secas, jaulas y tolvas. Unidades sometidas a constante mantenimiento en nuestros talleres propios permitiéndonos una cobertura nacional.--
						</p>
					</div>
				</div>
				<div class="ventaja col-12 col-md-4 mb-3">
					<img src="img/seguro-de-mercancia.png 2" class="img-fluid" alt="Imagen">
					<p class="f800 text-uppercase mt-3">
						<!--Seguro <br>de mercancia-- Titulo
					</p>
					<div class="descripcion p-4 bg-gris-oscuro text-center flex-column justify-content-center">
						<h4 class="f800 opacity-40 text-white mb-4"><!--Seguro de <br>Mercancía-- Titulo</h4>
						<p class="text-white">
							Contenido
							<!--Ofrecemos un seguro opcional contra robo de mercancía o accidentes.--
						</p>
					</div>
				</div>-->
			</div>
		</div>
	</section>

	<!--
	<section class="section-numeralia bg-rojo padding">
		<div class="container">
			<h2 class="f800 text-center text-uppercase">Datos importantes:</h2>
			<div class="row mt-5 text-center">
				<div class="col-12 col-md-4 mb-3 mb-md-0">
					<div class="count text-white f800 display-4 mb-2">1,500</div>
					<span class="d-block text-uppercase text-white">Asociados <br>en todo el país</span>
				</div>
				<div class="col-12 col-md-4 mb-3 mb-md-0">
					<div class="count text-white f800 display-4 mb-2">14</div>
					<span class="d-block text-uppercase text-white">Tipos de remolque<br> para toda necesidad</span>
				</div>
				<div class="col-12 col-md-4 mb-3 mb-md-0">
					<div class="count text-white f800 display-4 mb-2">18</div>
					<span class="d-block text-uppercase text-white">Años<br> en el sector</span>
				</div>
			</div>
		</div>
	</section>
-->
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