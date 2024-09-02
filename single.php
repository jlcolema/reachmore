<?php get_header(); ?>

	<div id="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1 class="article-title entry-title"><?php the_title(); ?></h1>

			<?php include (TEMPLATEPATH . '/-/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>
			<?php bab_manual(); ?>

		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

	</div>
	
	<div id="secondary">
	
		<?php dynamic_sidebar( 'Blog Widgets' ); ?>
		
	</div>

<?php get_footer(); ?>