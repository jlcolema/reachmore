<?php

/* Template Name: Articles */

?>

<?php get_header(); ?>

	<div id="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
			
				<?php include('-/inc/featured-image.php'); ?>

				<?php the_content(); ?>
				
				<ul>
	
					<?php
					
						// get all portfolio items
						$args = array(
							'numberposts'=>-1,
							'post_type'=>'post',
							'orderby'=>'menu_order',
							'order'=>'asc',
							'post_status'=>'publish',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'category',
					                'field' => 'slug',
					                'terms' => 'article'
					            )
					        )
							
						);
						$items = get_posts($args); 
		
						foreach($items as $item):
							echo '<li><a href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></li>';
						endforeach;
					?>
						
				</ul>

			</div>

		</article>
		
		<?php endwhile; endif; ?>

	</div>
	
	<div id="secondary">
	
		<?php dynamic_sidebar( 'Blog Widgets' ); ?>
		
	</div>

<?php get_footer(); ?>


