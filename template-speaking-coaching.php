<?php

/* Template Name: Speaking/Coaching Template */

?>

<?php get_header(); ?>

	<div id="speaker-photo">
			
		<?php include('-/inc/featured-image.php'); ?>

		<p class="more"><a href="/about/cj-mcclanahan/">Learn more about CJ</a></p>
		
		<div class="video-thumbs">
		
			<?php
			$thumb[1] = '
			<div class="thumb">
				<a href="/resources/videos/jack-canfield-testimonial/">
					<img src="/wp-content/uploads/2012/09/thumb-jack-canfield-video.jpg" alt="Jack Canfield Testimonial Video" height="85" width="155" />
					<p>Hear what bestselling author Jack Canfield has to say about CJ.</p>
				</a>
			</div>
			';
		
			$thumb[2] = '
			<div class="thumb">
				<a href="/resources/videos/cj-mcclanahan-inspirational-keynote-speaker/">
					<img src="/wp-content/uploads/2012/09/thumb-thrivemap-video.jpg" alt="CJ McClanahan speaking at Thrive Map" height="85" width="155" />
					<p>Check out CJ inspiring people at ThriveMap.</p>
				</a>
			</div>
			';
			
			if (is_page('speaking')) {
				echo $thumb[1];
				echo $thumb[2];
			} else {
				echo $thumb[2];	
				echo $thumb[1];	
			}
			?>
			
		</div>

	</div>

	<div id="primary">

		<div class="featured group">

			<div class="video-container">
			
				<?php
				
					// if there is a video link, print the video
					$video_id = get_post_meta($post->ID, 'video', true);
					
					if ( $video_id !== '' ) {
					
						$vwidth = 510;
						$vheight = 290;
						
						$video_url = get_post_meta($video_id, 'video_url', true);
						include('-/inc/videos.php');
						
					} 
					
				?>
				
			</div>

			<div class="sidebar"><?php /* echo get_post_meta($post->ID, 'hubspot_form_html', true) */ echo do_shortcode(get_post_meta($post->ID, 'hubspot_form_html', true)) ?></div>

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
