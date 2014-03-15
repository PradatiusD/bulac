		<?php wp_footer();?>
		<div class="row">
			<div class="large-12 columns text-center">
				<img src="<?php echo get_template_directory_uri().'/bulac-black-white-small.png';?>" alt="">
				<br><br>			
			</div>			
		</div>

		<footer>
			<div class="row">
				<div class="medium-8 columns">
					<h5>Stay on top of what’s happening in <a href="#">our community</a>.</h5>
					<p>Sign up to receive our <a href="#">awesome monthly newsletter</a> to stay up to date with events, fundraisers, and news from the Brown Latino community.</p>
				</div>

				<div class="medium-4 columns">
					<form method="post" action="<?php echo get_template_directory_uri().'/footer-mail.php';?>">
						<div class="row collapse margintop-20px">
							<div class="small-8 medium-8 columns">
								<input type="text" name="email" placeholder="signup@example.com">
							</div>
							<div class="small-4 medium-4 columns">
								<input type="submit" href="#" class="postfix small button expand" value="Sign Up">
							</div>
						</div>
					</form>
				</div>
			</div>
		</footer>
		<section class="bottom-widgets">
			<div class="row">
				<div class="large-12 columns">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?>
					<?php endif; ?>				
				</div>
			</div>
		</section>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bulac.min.js"></script>
	</body>
</html>
