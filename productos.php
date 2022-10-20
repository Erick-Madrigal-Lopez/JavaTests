<?php $active = 'productos'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos | ASERSA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">

	<?php //include_once('partials/metas.php'); ?>
	<?php include_once('partials/styles.php'); ?>
</head>

<body>
	<?php include_once('partials/header.php'); ?>

	<section class="section-intro section-parallax d-flex align-items-center justify-content-center padding"
		data-image-src="img/parallax01.jpeg" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-z-ndex="-100"
		data-natural-width="1920" data-natural-height="1080">
		<div class="container" data-entrance="from-bottom" data-entrance-delay="100">
			<h1 class="h2 rojo text-center f800 text-uppercase">Nuestras líneas <br>de negocio</h1>
			<div class="row mt-5">
				<div class="col-12 col-md-6">
					<img src="img/asersa/productos/presentacion.png" class="img-fluid" alt="">
				</div>
				<div class="col-12 col-md-6 d-flex align-items-center justify-content-between p-5">
					<div class="row text-center">
						<div class="col-12 col-md-6 mb-3 mb-md-0">
							<img src="img/asersa/productos/Taller.png" class="img-fluid px-5" alt="">
							<p class="h5 rojo f800 mt-2">
								Taller
							</p>
						</div>
						<div class="col-12 col-md-6">
							<img src="img/asersa/productos/Refacciones.png" class="img-fluid px-5" alt="">
							<p class="h5 rojo f800 mt-2">
								Refacciones
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-5 text-center">
				<h2 class="h3 text-uppercase rojo f800 mb-4">Sectores productivos</h2>
				<p>
					Contamos con una <span class="f600">amplia experiencia en el manejo de diversos productos</span>
					<br>esto nos permite ofrecer la mejor opción para su negocio.
				</p>
				<p class="f600">
					En asersa, se da servicio a:
				</p>
			</div>
			<div class="row mt-5 text-center">
				<div class="col-6 col-md">
					<img src="img/asersa/Icons/remolque.svg" class="img-fluid" alt="">
					<p class="f800 mt-2">
						Remolques
					</p>
				</div>
				<div class="col-6 col-md">
					<img src="img/asersa/Icons/dolly.svg" class="img-fluid" alt="">
					<p class="f800 mt-2">
						Dollys
					</p>
				</div>
				<div class="col-6 col-md">
					<img src="img/asersa/Icons/torton.svg" class="img-fluid" alt="">
					<p class="f800 mt-2">
						Tortons
					</p>
				</div>
				<div class="col-6 col-md">
					<img src="img/asersa/Icons/tracto.svg" class="img-fluid" alt="">
					<p class="f800 mt-2">
						Tractos
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-rojo pt-5">
		<div class="container text-center max800">
			<h2 class="text-white text-uppercase f800">Multifuncional:</h2>
			<p class="text-white mt-3">
				Somos una empresa multifuncional, que ofrece tanto servicios de reparación y
				mantenimiento como servicios de venta y atención, donde nos enfocamos principalmente
				en los tractos
			</p>

			<h2 class="text-white text-uppercase f800 mt-5 mb-4">Tipos de servicios:</h2>
			<div class="bg-gris-oscuro p-5 tipos-servicios">
				<div class="row text-left">
					<div class="col-12 col-md-6">
						<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">1</span></div>
							<div class="ml-2 text-white text-uppercase f600">Mantenimientos</div>
						</div>
						<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">2</span></div>
							<div class="ml-2 text-white text-uppercase f600">Reparaciones</div>
						</div>
						<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">3</span></div>
							<div class="ml-2 text-white text-uppercase f600">Ventas</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">4</span></div>
							<div class="ml-2 text-white text-uppercase f600">Atensión
							</div>
						</div>
						<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">5</span></div>
							<div class="ml-2 text-white text-uppercase f600">Garantías</div>
						</div>
						<!--<div class="mb-3 d-flex align-items-center">
							<div><span class="number mr-2">6</span></div>
							<div class="ml-2 text-white text-uppercase f600">Plataformas</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
<!--
	<section class="section-intro section-parallax d-flex align-items-center justify-content-center padding"
		data-image-src="img/parallax05.jpeg" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-z-ndex="-100"
		data-natural-width="1920" data-natural-height="1080">
		<div class="container">
			<h2 class="text-center text-white f800 text-uppercase">Rastreo de unidad <br> via web y app</h2>
			<div class="row mt-4">
				<div class="col-12 col-md-6">
					<p class="text-white">
						Usted puede conocer el tiempo de <span class="text-white f600">carga y descarga de su
							mercancía,</span> así como también darle un seguimiento oportuno en el trayecto, brindándole
						la ubicación de cada unidad y mercancía con una diferencia real de 2 minutos.
					</p>
				</div>
				<div class="col-12 col-md-6">
					<p class="text-white">
						Nos comprometemos con la empresa y su tranquilidad, es por ello por lo que <span
							class="text-white f600">brindamos tecnología precisa en rastreo satelital</span> con un
						grupo de expertos en planeación y seguimiento de rutas seguras.
					</p>

					<h3 class="h2 text-white f800 text-uppercase mt-5">Capacitación en uso <br>de la app:</h3>
					<p class="text-white">
						Experto personal en sistemas <span class="text-white f600">le brindara capacitación, constante
							para el uso correcto de nuestra APP,</span> en la cual, encontrara un sinfín de prácticas
						herramientas que le permitirán tener el control de los movimientos de sus mercancías.
					</p>

					<h3 class="h2 text-white f800 text-uppercase mt-5">SLI clientes:</h3>
					<p class="text-white">
						Ingreso al <span class="f600 text-white">portal</span> donde se encuentran las siguientes
						funciones:
					</p>
					<div class="d-flex align-items-start">
						<div class="d-inline-block mr-2"><i class="fa fa-dot-circle-o rojo"></i></div>
						<p class="text-white">Visualizar facturas pagadas, notas de crédito, CFDI de traslado o
							complemento carta de porte.</p>
					</div>
					<p class="text-white">
						<i class="fa fa-dot-circle-o rojo mr-1"></i> Descargar evidencias de viajes.
					</p>
					<p class="text-white">
						<i class="fa fa-dot-circle-o rojo mr-1"></i> Darles seguimiento a sus unidades.
					</p>
					<p class="text-white">
						<i class="fa fa-dot-circle-o rojo mr-1"></i> Evaluar nuestro servicio en cada uno de los viajes
						realizados.
					</p>
				</div>
			</div>
		</div>
	</section>
	-->
	<section class="section-intro section-parallax d-flex align-items-center justify-content-center padding"
		data-image-src="img/parallax04.jpeg" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-z-ndex="-100"
		data-natural-width="1920" data-natural-height="1080">
		<div class="container">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 mb-3 mb-md-0">
						<h3 class="h2 text-white f800 text-uppercase mt-5">Departamento de <br>calidad y procesos:</h3>
						<p class="text-white">
							Contamos con un departamento de calidad para la <span class="f600 text-white">mejora
								continua de nuestros procesos y la prevención de accidentes</span> de nuestras
							operaciones.
						</p>

						<h3 class="h2 text-white f800 text-uppercase mt-5">Equipo y Herramienta:</h3>
						<p class="text-white">
							En ASERSA buscamos la seguridad de sus vehículos es por ello que contamos con una <span
								class="f600 text-white">gran cantidad de herramientas y equipos</span> que facilitan
								las revisiones, mantenimientos y reparaciones.
						</p>

						<h3 class="h2 text-white f800 text-uppercase mt-5">Tarifas competitivas:</h3>
						<p class="text-white">
							Nuestras tarifas son realmente atractivas, ya que <span class="text-white f600">contamos con
								unidades vacías disponibles en gran parte de la República.</span>
						</p>
					</div>
					<div class="col-12 col-md-6">
						<img src="img/asersa/Icons/productos_final.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include_once('partials/footer.php'); ?>
	<?php include_once('partials/scripts.php'); ?>
</body>

</html>