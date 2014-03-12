<?php
/*
Template Name: Full-width
*/

?>
<?php get_header(); ?>

<main class="full-width">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content('Read more...'); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>