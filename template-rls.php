<?php

/* Template Name: Reach Leadership Series */

?>

<?php get_header(); ?>

	<div id="primary">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry group">

				<?php the_content(); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

<?php get_footer(); ?>
