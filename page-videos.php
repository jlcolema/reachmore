<?php get_header(); ?>

	<div id="primary">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
			
				<?php the_content(); ?>
				
				<ul class="thumbs">

					<?php
					
						// get all portfolio items
						$args = array(
							'numberposts'=>-1,
							'post_type'=>'videos',
							'orderby'=>'menu_order',
							'order'=>'asc',
							'post_status'=>'publish'
							
						);
						$items = get_posts($args); 

						foreach($items as $item):
			
							$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), 'full');
							$image_url = $image_url[0];
							echo '<li>';
								echo '<a href="' . get_permalink($item->ID) . '">';
									echo '<img src="' . $image_url . '" alt="' . $item->post_title . '" />';
									echo '<p>' . get_the_title($item->ID) . '</p>';
								echo '</a>';
							echo '</li>';
						endforeach;
					?>
						
				</ul>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
