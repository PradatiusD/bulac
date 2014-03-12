<aside class="large-3 columns">
	<nav>
		<h2>
			<a href="<?php echo get_site_url();?>">
				<?php echo get_bloginfo('name');?>
			</a>
		</h2>
		<!-- Sidebar Nav -->
		<?php wp_nav_menu(array(
			'theme_location'  => 'main-nav',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
		)); ?>
	</nav>
</aside>