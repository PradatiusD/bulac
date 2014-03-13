<?php
	global $switched;
	switch_to_blog(1);
	get_header();
	restore_current_blog();
?>

<div class="row">
	<?php require_once( get_stylesheet_directory() . '/sidebar.php' ); ?>
	<main class="large-9 columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php if (is_page() == false): ;?>
					<span class="radius secondary label">Posted on: <?php the_date('M dS, Y'); ?></span>
					<br>
					<br>
				<?php endif;?>

				<?php the_content('Read more...'); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</main>
	<div class="large-12 columns">
		<hr>	
	</div>
</div>

<?php
	get_footer(); 
?>