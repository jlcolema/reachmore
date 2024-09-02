<?php get_header(); ?>

	<div id="speaker-photo">
			
		<?php include('-/inc/featured-image.php'); ?>

	</div>

	<div id="primary">

		<div class="featured group">

			<div class="video-container">

				<h1 class="page-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
			</div>

			<div class="sidebar"><?php echo print_custom_field('document') ?></div>

		</div>

	</div>

<?php get_footer(); ?>
