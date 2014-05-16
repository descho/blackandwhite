<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div>
		<header class="site-header">
			<div class="content-area">
				<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				</a>

				<div class="navbar">
					<nav class="nav main-nav">
						<?php

							$args = array(
								'menu' => 'main-menu' 
							);

							wp_nav_menu( $args );

						?>
					</nav>
				</div>
			</div>
		</header>

		<div class="main">
