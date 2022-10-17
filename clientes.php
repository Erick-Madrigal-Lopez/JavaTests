<?php $active = 'empresa'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuestros Clientes | SLI</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">

	<?php //include_once('partials/metas.php'); ?>
	<?php include_once('partials/styles.php'); ?>
</head>
<body>
	<?php include_once('partials/header.php'); ?>

	<section class="section-intro section-parallax d-flex align-items-center justify-content-center padding" data-image-src="img/parallax01.jpeg" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-z-ndex="-100" data-natural-width="1920" data-natural-height="1080">
		<div class="container" data-entrance="from-bottom" data-entrance-delay="100">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="h2 rojo text-uppercase f800 borde-bottom">Clientes</h1>
                    <p class="gris f600">
                        Estos son algunos de los clientes que nos respaldan:
                    </p>
                </div>
            </div>
			<div class="row d-md-flex align-items-md-center">
				<div class="col-12 col-md-6 order-md-1">
                    <div class="text-center">
                        <img src="img/clientes-01.png" class="img-fluid" alt="">
                    </div>
				</div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="text-center">
                        <span class="rounded-pill bg-rojo text-white d-inline-block px-4 py-2 mb-5 h5 f800">División Jaulas Graneleras</span>
                        <img src="img/clientes-02.png" class="img-fluid" alt="">
                    </div>
				</div>
			</div>
            <div class="row d-md-flex align-items-md-center mt-5">
				<div class="col-12 col-md-6 order-md-1">
                    <div class="text-center">
                        <span class="rounded-pill bg-rojo text-white d-inline-block px-4 py-2 mb-5 h5 f800">División Portacontenedores</span>
                        <img src="img/clientes-03.png" class="img-fluid" alt="">
                    </div>
				</div>
                <div class="col-12 col-md-6 order-md-1">
                    <div class="text-center">
                        <img src="img/clientes-04.png" class="img-fluid" alt="">
                    </div>
				</div>
			</div>

		</div>
	</section>

	<?php include_once('partials/footer.php'); ?>
	<?php include_once('partials/scripts.php'); ?>
</body>
</html>