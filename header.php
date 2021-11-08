<!DOCTYPE html>
<html <?php language_attributes(); ?>>
		
		<head>
		   <title><?php if ( is_search() ) :
		   	echo 'Résultats de recherche pour "'.get_search_query().'" | ';
		   	 else :
		   	 	wp_title('|', true, 'right');
		   	 endif;
		   	 bloginfo('name'); 
		   ?>
		   </title>
		   <meta charset="<?php bloginfo( 'charset' ); ?>">
		   <meta name="viewport" content="width=device-width, initial-scale=1.0">
		   <link rel="shortcut icon" href="">
		   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,700&display=swap" rel="stylesheet">
		   <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
		   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/mobirise-icons/mobirise-icons.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/infine.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/sidr/css/jquery.sidr.dark.css">
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css">
		   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.default.min.css">
		   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

		   
		   <!-- Optional JavaScript -->
		    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		    <script src="https://code.jquery.com/jquery-3.4.1.js"
		    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous" ></script>
		    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" ></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" ></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/sidr/js/jquery.sidr.js" ></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/sidr/js/jquery.sidr.min.js" ></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/slick/js/slick.js" ></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/slick/js/slick.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.navigation.js"></script>
			<script src="https://platform.twitter.com/widgets.js" charset="utf-8" ></script>

			<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-56D5RV8');</script>
<!-- End Google Tag Manager -->

			<?php wp_head(); ?>
		</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56D5RV8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="top"></div>

	<div id="fb-root"></div> 
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>

		<!--header start-->
		<header>
			<!-- Start Navigation -->
			<div class="align-center">
				<nav class="navbar navbar-center navbar-expand-lg navbar-light navbar-fixed-top">
					<div class="navfull">
						<a class="navbar-brand animated bounce" href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-home.jpeg" width="80" height="30" class="d-inline-block align-top" alt="logo InFineMusic">
						</a>
						<div id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<button type="button" data-toggle="modal" data-target="#Search" class="btn btn-default navbar-btn">
		         						<span class="fa fa-search" aria-hidden="true" ></span>
									</button>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

		<div class="modal fade" id="Search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="mt-5 release" style="color:white">Trouver sur HomeMade</h4>
						<form role="search" method="post" class="form form-group" action="<?php echo home_url( '/' ); ?>">
		    				    <div class="form-group">
		    				        <input type="search" required class="form-control" placeholder="Chercher" value="" name="s" title="Search">
		    				        <div class="input-group-btn">
		    				            <button class="btn btn-default searchbox" type="submit">
		    				                ok
		    				            </button>
		    				        </div>
		    				    </div>
		    				<div class="clearfix"></div>
		    				<input type="hidden" name="search-type" value="general" />
						</form>
					</div>
				</div>
			</div>
		</div>

<style>
	img.d-inline-block.align-top {
      position: relative;
      object-fit: contain;
      }
  </style>