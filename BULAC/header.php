<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo get_bloginfo(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<nav class="top-bar" data-topbar="">
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<h1>
						<a href="<?php echo get_site_url();?>">
							<?php echo get_bloginfo('name');?>
						</a>
					</h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section -->
					<?php wp_nav_menu(array(
						'theme_location'  => 'main-nav',
						'menu'            => '',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'right',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => new My_Walker_Nav_Menu()
					)); ?>
			</section>
		</nav>

