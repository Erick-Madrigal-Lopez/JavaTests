<?php $active = 'contacto'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contáctanos | ASERSA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">

	<?php //include_once('partials/metas.php'); ?>
	<?php include_once('partials/styles.php'); ?>
</head>
<body>
	<?php include_once('partials/header.php'); ?>

    <picture>
        <source media="(max-width: 799px)" srcset="img/contacto-banner-movil.jpeg" class="w-100">
        <source media="(min-width: 800px)" srcset="img/contacto-banner.jpeg" class="w-100">
        <img src="img/contacto-banner.jpeg" alt="" class="w-100">
    </picture>

    <div class="container mt-5">
        <div class="map-holder shadow" data-lat="20.42835728318016" data-lng="-103.20425960243348" data-zoom="15" style="height:480px;" data-entrance="from-right" data-dalay="200">
            <div class="map-info">
                <h2 class="h5 rojo f800">ASERSA SA DE CV</h2>
                <p class="f600">
                    Carretera a la Capilla 840-D, <br>
                    La capilla, Ixtlahuacán de los Membrillos, <br>
                    Jalisco, México CP: 45870
                </p>
            </div>
        </div>
    </div>

    <section class="section-contacto padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <span class="bg-rojo text-white text-uppercase f800 h5 d-inline-block py-2 px-3">Matríz Jalisco</span>
                    <p class="f800 font-italic text-uppercase my-3">
                        ASERSA SA DE CV
                    </p>
                    <p>
                        <span class="f800">Carretera a la Capilla 840-D,</span> <br>
                        La capilla, Ixtlahuacán de los Membrillos, <br>
                        Jalisco, México  CP: 45870
                    </p>
                    <div class="d-flex align-items-center">
                        <div>
                            <a href="tel:3336960808" class="f800 text-decoration-none icon bg-rojo mr-2 text-center">
                                <i class="fa fa-phone text-white"></i>
                            </a>
                        </div>
                        <span class="f600">+52 (33) 3696 0808</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <!--<div class="col-12 col-md-6 d-flex align-items-center justify-content-start mb-4">
                            <div>
                                <a href="http://clientes.sli.mx/" target="_blank" class="btn btn-success mr-3 icon">
                                    <i class="fa fa-user text-white"></i>
                                </a>
                            </div>
                            <span class="text-uppercase f600">Portal <br>clientes</span>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-start mb-4">
                            <div>
                                <a href="http://asociados.sli.mx/" target="_blank" class="btn btn-primary mr-3 icon">
                                    <i class="fa fa-user text-white"></i>
                                </a>
                            </div>
                            <span class="text-uppercase f600">Portal <br>Asociados</span>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-start mb-4">
                            <div>
                                <a href="mailto:proveedores@sli.mx" target="_blank" class="btn bg-rojo mr-3 icon">
                                    <i class="fa fa-envelope text-white"></i>
                                </a>
                            </div>
                            <span class="text-uppercase f600">Proveedores</span>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-start mb-4">
                            <div>
                                <a href="mailto:bolsadetrabajo@sli.mx" target="_blank" class="btn bg-rojo mr-3 icon">
                                    <i class="fa fa-envelope text-white"></i>
                                </a>
                            </div>
                            <span class="text-uppercase f600">Bolsa de <br>trabajo</span>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="row mt-5 d-flex align-items-center">
                <div class="col-12 col-md-6">
                    <div class="mt-5 d-flex align-items-center justify-content-between">
                        <span class="bg-rojo text-white text-uppercase f800 h5 d-inline-block py-2 px-3">Contáctanos</span>
                        <span class="text-uppercase f600 h5">
                            Cotizaciones Clientes
                        </span>
                    </div>
                    <form class="mt-4" action="enviar.php" method="post" data-toggle="validator" data-disable="false" dat-focus="false">
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="*Nombre:" data-error="*su nombre es requerido." required>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" class="form-control" name="empresa" placeholder="Empresa:">
                                <small class="help-block with-errors"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono:">
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <input type="email" class="form-control" name="correo" placeholder="Correo:" data-error="*Ingrese un correo válido." data-required-error="*Su correo es requerido." required>
                                <small class="help-block with-errors"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <textarea name="comentarios" class="form-control" rows="4" placeholder="*Mensaje:" data-error="*Su mensaje es requerido." required></textarea>
                                <small class="help-block with-errors"></small>
                            </div>
                            <div class="col-12 form-group">
                                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Lfo-GwcAAAAAJUvgYbAVAJe59rMSD0OsyhZkJcV"></div>
                            </div>
                            <div class="col-12 form-group">
                                <button name="enviar" id="submitBtn" value="1" class="btn bg-rojo text-white rounded-pill text-uppercase f800 btn-block py-2" disabled>Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <img src="img/contacto.jpg 2" class="img-fluid border-20" alt="contacto IMG">
                </div>
            </div>
        </div>
    </section>

	<?php include_once('partials/footer.php'); ?>
	<?php include_once('partials/scripts.php'); ?>
    <script>
        function recaptchaCallback() {
            $('#submitBtn').removeAttr('disabled');
        };
    </script>

</body>
</html>