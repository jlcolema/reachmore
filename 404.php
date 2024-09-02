<?php get_header(); ?>

	<div id="primary">

		<h2 class="page-title"><?php _e('Oops&hellip; Page Not Found','html5reset'); ?></h2>

		<div class="entry">

			<p>We're sorry, the page you were looking for could not be found.</p>

			<nav>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>

		</div>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>