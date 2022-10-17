<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fakeloader@1.0.0/fakeLoader.min.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer></script>
<script>
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

	if ( width > 600) {
		document.write('<script src="js/scroll-entrance.js"><\/script>');
	}
	
//Quita el boton derecho de cliengo. 	
(function(){
    var div = null;
      var id = setInterval(function(){
        div = document.getElementById("clgo");
        if (div){
          div.parentNode.removeChild(div);
          clearInterval(id);
        } 
      }, 1000);})()
	
	
	
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/jquery.mb.YTPlayer.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.2.0/jquery.smooth-scroll.min.js" defer></script>
<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" defer></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCouSgZpOOjPuiMhhsXyv2agiAPbxZecZg" defer></script>
<script src="js/maps.js" defer></script>
<!--<script src="js/whatsapp/floating-wpp.js" defer></script>-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.1/vegas.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/paroller.js@1.4.6/dist/jquery.paroller.min.js"></script> -->
<!-- <script src="js/floating.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" defer></script>
<script src="js/pushy/js/pushy.min.js" defer></script>
<script>



    /*----------  Loader  ----------*/
    $('.fakeLoader').fakeLoader({
        timeToHide: 1000,
        spinner: 'spinner1',
        bgColor: '#eb1d25',
        zIndex: '5000'

    });

    jQuery(document).ready(function($) {

        /*----------  Smooth Scroll  ----------*/
        $('.scroll').smoothScroll({
            offset: -90,
            speed: 1000
        });

        /*----------  Video  ----------*/
        if($('.video-iframe').length){
            $('.video-iframe').magnificPopup({
                type: 'iframe'
            });
        }


        /*----------  WhatsApp  ----------*/
        /*if($('#whatsapp').length){			
	        $('#whatsapp').floatingWhatsApp({
	            phone: '5213321843647',
	            popupMessage: 'Hola, estamos para apoyarte si tienes alguna duda.',
	            message: "Hola, deseo información sobre sus servicios.",
	            showPopup: true,
	            showOnIE: false,
	            headerTitle: 'Envíanos un WhatsApp',
	            position: 'right',
	            buttonImage: '<img src="js/whatsapp/whatsapp.svg" />',
	            size: '50px',
                autoOpenTimeout: 100
	        });
        }*/

        setTimeout(function(){
            var hash = window.location.hash.substr(1);
            if(hash){

                $('html, body').animate({
                    scrollTop: $("#"+hash).offset().top - 103
                }, 100);
            }
        }, 1000);


		/*----------  Numeralia  ----------*/
		if($(".count").length){
			$('.count').counterUp({
	            delay: 10,
	            time: 2000
	        });
		}

		$('.ventaja').on('mouseover', function(){
			$(this).find('.descripcion').css('display', 'flex');
		});

		$('.ventaja').on('mouseleave', function(){
			$(this).find('.descripcion').css('display', 'none');
		});

		$('.empresa-nav li').on('click', function(){
			$('.empresa-nav li').removeClass('active');
			$(this).addClass('active');
		});

		// $('.submenu').on('click', function(){
		// 	$(this).toggleClass('open');
		// });

		$('[data-toggle="tooltip"]').tooltip();

    });
</script>