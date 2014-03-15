<?php get_header(); ?>

<div class="row">
	<main class="large-12 columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php if (is_page() == false): ;?>
					<span class="radius secondary label">Posted on: <?php the_date('M dS, Y'); ?></span>
					<br>
					<br>
				<?php endif;?>

				<?php the_content('Read more...'); ?>
				<hr>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</main>
</div>

<?php get_footer(); ?>