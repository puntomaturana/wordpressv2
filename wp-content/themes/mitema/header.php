<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php bloginfo(); ?></title>
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
   
	<div class="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<button id="primary-nav-button" type="button">Menu</button>
						<a href="index.html">
							<div class="logo">
								<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Venue Logo">
							</div>
						</a>
						<nav id="primary-nav" class="dropdown cf">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'main-menu',
									'container' => 'div',
									'container_class' => 'dropdown menu',
									'menu_class' => 'dropdown menu'
								));
							?>
						</nav><!-- / #primary-nav -->
					</div>
				</div>
			</div>
		</header>
	</div>