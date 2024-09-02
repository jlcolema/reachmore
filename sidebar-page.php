<?php

/* Template Name: Sidebar Template */

?>

<?php get_header(); ?>

	<div id="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
			
				<?php include('-/inc/featured-image.php'); ?>

				<?php the_content(); ?>

			</div>

		</article>
		
		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
