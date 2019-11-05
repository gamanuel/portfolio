<?php
/* Smarty version 3.1.32, created on 2019-11-05 15:14:03
  from '/Users/manuel/www/check-mdq/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc183abbbf174_45582467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ee2776ac7ce3068c79fdd6d87d1833900c3f7a5' => 
    array (
      0 => '/Users/manuel/www/check-mdq/templates/home.tpl',
      1 => 1572963241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc183abbbf174_45582467 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>CHECKMDQ - WORKSI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	
	<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Check<span>mdq</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Acerca de nosotros</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Precios</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Realizarle el<span>service a tu auto</span> <span>nunca fue tan facil</span></h1>
	            <p style="font-size: 18px;">Con checkmdq te ahorras de perder el tiempo, en tres simples pasos concretar el service, reservas, coordinás y pagás</p>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="#" autocomplete="off" class="request-form ftco-animate">
          		<h2>Buscá tu vehiculo</h2>
              <div class="d-flex">
                <div class="form-group mr-2 autocomplete">
                  <label for="" class="label">Marca</label>
                  <input type="text" class="form-control" id="inputMarcas" placeholder="Marca">
                </div>
                <div class="form-group ml-4">
                  <label for="" class="label">Modelo</label>
                  <input type="text" class="form-control"  id="inputModelos" placeholder="Modelo">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Service</label>
                <select class="form-control" id="exampleFormControlSelect1" disabled>
                    <option>Taller Michellin Independencia 369</option>
                </select>
              </div>
              <div class="form-group">
                <label for="" class="label">Centro de Servicio</label>
                <select class="form-control" id="exampleFormControlSelect1" disabled>
                  <option>Taller Michellin Independencia 369</option>
                  <option>Service Bosch Independencia</option>
                  <option>Lubricentro Santiago</option>
                </select>
              </div>
              <div class="form-group">
                <input type="button" value="Buscar Turno" class="btn btn-primary py-3 px-4"  data-toggle="modal" data-target="#exampleModalCenter">
              </div>
	    	    </form>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section services-section ftco-no-pt ftco-no-pb mt-4">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Nuestro Servicio</span>
            <h2 class="mb-2">Nuestros Servicios</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-customer-support"></span></div>
	                <h3 class="heading mb-0 pl-3">Taller</h3>
                </div>
                <p>Testo texto texto texto Testo texto texto texto</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-route"></span></div>
	                <h3 class="heading mb-0 pl-3">Services</h3>
                </div>
                <p>Testo texto texto texto Testo texto texto texto</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-online-booking"></span></div>
	                <h3 class="heading mb-0 pl-3">Lavado</h3>
                </div>
                <p>Testo texto texto texto Testo texto texto texto</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-rent"></span></div>
	                <h3 class="heading mb-0 pl-3">Venta de Repuestos</h3>
                </div>
                <p>Testo texto texto texto Testo texto texto texto</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Que Ofrecemos</span>
            <h2 class="mb-2">Aprovecha nuestras Ofertas</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$2500</span>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Repuesto</a></h2>
    						<span>Audi</span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Comprar</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Detalles</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$2500</span>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Repuesto</a></h2>
    						<span>Ford</span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Comprar</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Detalles</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$2500</span>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Repuesto</a></h2>
    						<span>Cheverolet</span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Comprar</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Detalles</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$2500</span>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Repuesto</a></h2>
    						<span>Mercedes</span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Comprar</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Detalles</a></p>
    					</div>
    				</div>
    			</div>

    			
    		</div>
    	</div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">checkmdq</span>
            <h2 class="mb-3">Como Funciona</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Taller Michellin Independencia 369 y Modelo</h3>
                <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Taller Michellin Independencia 369</h3>
                <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Elegi el taller/turno</h3>
                <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Retira tu vehiculo</h3>
                <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonios</span>
            <h2 class="mb-3">Clientes Satisfechos</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">asdasdasd asdasld lnfldsfk aklsdalskd lkasnlg ño flnsdalks alksdmalskdñlmge lkm.</p>
                    <p class="name">Manuel Garcia Amaro</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Acerca CheckMDQ</h2>
              <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informacion</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Acerca</a></li>
                <li><a href="#" class="py-2 d-block">Servicios</a></li>
                <li><a href="#" class="py-2 d-block">Terminos y condiciones</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Atencion al Cliente</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Opciones de Pago</a></li>
                <li><a href="#" class="py-2 d-block">Service Tips</a></li>
                <li><a href="#" class="py-2 d-block">Como funciona</a></li>
                <li><a href="#" class="py-2 d-block">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Tienes Preguntas?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">123 Direccion del local, Mar del Plata, Capital Federal, ARG</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+123 123 123 123</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@checkmdq.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> Todos los derechos reservados | Developed by <a href="https://worksi.com.ar" target="_blank">Worksi</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Taller Michellin Independencia 369</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Pagar</button>
        </div>
      </div>
    </div>
  </div>


  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/aos.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/scrollax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/check-mdq.js"><?php echo '</script'; ?>
>
    
  </body>
</html><?php }
}
