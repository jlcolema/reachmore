<?php

/* Template Name: Coaching Thanks */

?>

<?php get_header(); ?>

	<?php if (is_front_page()) { ?>

	<div class="featured group">

		<div class="video-container">
			
			<?php
			
				// get all published homepage slideshow items
				$args = array(
					'numberposts'=>1,
					'post_type'=>'homepage_slideshow',
					'orderby'=>'menu_order',
					'order'=>'asc',
					'post_status'=>'publish'
				);
				$items = get_posts($args); 

				foreach($items as $item):
				
					// if there is a video link, print the video
					$video_id = get_post_meta($item->ID, 'video', true);
					
					if ( $video_id !== '' ) {
					
						$video_url = get_post_meta($video_id, 'video_url', true);
						include('-/inc/videos.php');
						
					} else {
					
						$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), 'full');
						$image_url = $image_url[0];
						$this_link = get_post_meta($item->ID, 'link', true);
						if ( strlen($this_link) ) {
							echo '<a href="' . $this_link . '">';
						}
						echo '<img src="' . $image_url . '" alt="' . $item->post_title . '" />';	
						if ( strlen($this_link) ) {
							echo '</a>';
						}
					}
				endforeach;
			
			?>
			
		</div>

		<div class="sidebar">

			<div class="speaking">
				<a href="/speaking">
					<?php dynamic_sidebar( 'home-speaking-widget' ); ?>
				</a>
			</div>

			<div class="coaching">
				<a href="/coaching">
					<?php dynamic_sidebar( 'home-coaching-widget' ); ?>
				</a>
			</div>

		</div>

	</div>

	<?php } ?>

	<div id="primary">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry group">

				<?php the_content(); ?>

				<?php get_sidebar(); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

	<?php if (is_front_page()) { ?>

	<div class="highlights">

		<ul class="group">

				
				<?php /*
				
					<li class="highlight book">
						
							$args = array(
								'numberposts'=>1,
								'post_type'=>'feature',
								'orderby'=>'menu_order',
								'order'=>'asc',
								'post_status'=>'publish'
							);
							$items = get_posts($args); 
							
								
							foreach($items as $item):
								echo '<aside class="widget">';
									echo '<h3 class="widget-title">' . $item->post_title . '</h3>';
									echo wpautop($item->post_content);
								echo '</aside>';
							endforeach;
					</li>
			
				*/	?>
			
			<li class="highlight feature"><?php dynamic_sidebar( 'home-box-column-1-widget' ); ?></li>

			<li class="highlight events"><?php dynamic_sidebar( 'home-box-events-widget' ); ?></li>

			<li class="highlight blog"><?php dynamic_sidebar( 'home-box-blog-widget' ); ?></li>

			<li class="highlight foundation"><?php dynamic_sidebar( 'home-box-foundation-widget' ); ?></li>

		</ul>

	</div>

	<?php } ?>

<?php get_footer(); ?>
