<?php get_header(); ?>

	<div id="primary">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h2 class="page-title"><?php the_title(); ?></h2>

			<div class="entry">
			
				<?php the_content(); ?>

				<?php $video_url = get_post_meta(get_the_ID(), 'video_url', true); ?>
				
				<?php if ($video_url != '') { ?>
				
					<?php include('-/inc/videos.php'); ?>
				
				<?php } ?>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
