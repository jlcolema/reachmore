<?php

/* Template Name: Contact Template */

?>

<?php get_header(); ?>

	<div id="primary">

		<div class="featured group">

			<div class="video-container">
				
				<?php echo do_shortcode(get_post_meta($post->ID, 'mappress', true)) ?>
				
			</div>

			<div class="sidebar">
				<h2 class="light">CONTACT US</h2>
				<?php gravity_form(1, false, false, false, false, true); ?>

			</div>

		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</article>
		
		<?php endwhile; endif; ?>

	</div>

<?php get_footer(); ?>
