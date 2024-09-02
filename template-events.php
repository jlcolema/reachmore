<?php

/* Template Name: Events */

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
					
					// get all terms for the event categories
					$args = array(
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 0,
						'taxonomy'                 => 'event_category'
					);
					$get_cats = get_categories($args);
					
					// loop through each term
					foreach($get_cats as $cat):
						
						// get all posts related to the current term
						$myrows = $wpdb->get_results( "SELECT distinct wposts.* 
							FROM $wpdb->posts wposts
								LEFT JOIN $wpdb->postmeta wpostmeta ON wposts.ID = wpostmeta.post_id 
								LEFT JOIN $wpdb->term_relationships ON (wposts.ID = $wpdb->term_relationships.object_id)
								LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
							WHERE $wpdb->term_taxonomy.taxonomy = 'event_category'
								AND $wpdb->term_taxonomy.term_id IN(" . $cat->cat_ID . ")
							ORDER BY wpostmeta.meta_value ASC");
						
						// output event link
						echo '<div class="event-group">';
							echo '<h2>' . $cat->cat_name . '</h2>';
							echo '<ul>';
								foreach($myrows as $row):
									echo '<li><a href="' . get_post_meta($row->ID, 'link', true) . '">' . $row->post_title . '</a></li>';
								endforeach;
							echo '</ul>';
						echo '</div>';
						
						
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


