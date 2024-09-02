<?php

/* Template Name: RLS Landing Page */

?>

<?php get_header(); ?>

<?php

	// get information for this page
	$post = get_page_by_title( 'RLS Home Page', 'OBJECT', 'rls_homepage' );

?>

	<div id="primary">

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry group rls">
				
			    <div class="section opener">
			        <div class="intro">
			           <?php echo wpautop(get_post_meta($post->ID, 'maincontent', true)); ?>
			        </div>
			
			        <div class="next-event">
			            <h3 class="section-title">Next Event</h3>
			
			            <div class="next-event-details">
			                <h4 class="date"><?php echo get_post_meta($post->ID, 'event_date', true); ?></h4>
			
			                <h5 class="title"><?php echo get_post_meta($post->ID, 'event_title', true); ?></h5>
			
			                <p class="speaker"><?php echo get_post_meta($post->ID, 'event_subtitle', true); ?></p>
			
			                <p class="details"><?php echo wpautop(get_post_meta($post->ID, 'eventdescription', true)); ?></p>
			
			                <ul class="times">
			                    <li><strong>Registration &amp; Networking</strong><?php echo wpautop(get_post_meta($post->ID, 'registration_networking', true)); ?></li>
			
			                    <li><strong>Speaker</strong> <?php echo wpautop(get_post_meta($post->ID, 'speaker', true)); ?></li>
			                </ul>
			
			                <div class="cta">
			                    <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" onClick="_gaq.push(['_trackEvent', 'Buttons', 'SignUp', 'RLS',, false]);">Sign Up</a>
			                </div>
			            </div>
			        
			            <div class="rls-sponsor">
			            	<h3>Sponsored By</h3>
			            	<a href="http://www.wibc.com/" rel="external"><img src="/wp-content/uploads/2013/01/sponsor_wibc.png" alt="RLS Sponsor - WIBC" /></a>
			            </div>
			            
			        </div>
			    </div>
			
			    <div class="section features">
			        <h3 class="section-title"><span>Features</span></h3><?php echo wpautop(get_post_meta($post->ID, 'features', true)); ?>
			    </div>
			
			    <div class="section speakers">
			        <h3 class="section-title"><span>Featured Speakers</span></h3>
			        
			
			        <ol class="events speakers-list group">
					<?php
					
						// get all portfolio items
						$args = array(
							'numberposts'=>-1,
							'post_type'=>'rls_speakers',
							'orderby'=>'menu_order',
							'order'=>'asc',
							'post_status'=>'publish'
							
						);
						$items = get_posts($args); 
		
						foreach($items as $item): 
					?>
							
			            <li class="event">
			                <h4 class="speaker"><?php echo get_the_title($item->ID); ?></h4>
			
			                <h5 class="date"><?php echo date('F d, Y', strtotime(get_post_meta( $item->ID, 'event_date_picker', true))); ?></h5>
			
			                <p class="title"><?php echo get_post_meta($item->ID, 'event_title', true); ?></p>
			            </li>
			        <?php
						endforeach;
					?>
			        </ol>
			    </div>
			
			    <div class="section about">
			        <h3 class="section-title"><span>About ThriveMap</span></h3>
			
			        <div class="group">
			            <?php echo wpautop(get_post_meta($post->ID, 'about', true)); ?>
			            <div class="media"><img title="example-media" src="http://www.goreachmore.com/wp-content/uploads/2012/11/logo_thrivemap.png" alt="" width="270" height="36"></div>
			        </div>
			    </div>
			
			    <div class="section sign-up">
			        <div class="callout group">
			            <?php echo wpautop(get_post_meta($post->ID, 'bottomcallout', true)); ?>
			        </div>
			    </div>

		</div>

	</article>

<?php get_footer(); ?>