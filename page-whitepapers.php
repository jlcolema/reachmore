<?php get_header(); ?>

	<div id="primary">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
			
				<?php the_content(); ?>
				
				<ul>

					<?php
					
						// get all portfolio items
						$args = array(
							'numberposts'=>-1,
							'post_type'=>'whitepapers',
							'orderby'=>'menu_order',
							'order'=>'asc',
							'post_status'=>'publish'
							
						);
						$items = get_posts($args); 
		
						foreach($items as $item):
							echo '<li><a href="' . wp_get_attachment_url(get_post_meta($item->ID, 'document', true)) . '">' . get_the_title($item->ID) . '</a></li>';
						endforeach;
					?>
						
				</ul>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
