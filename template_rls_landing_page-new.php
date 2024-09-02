<?php

/* Template Name: New RLS Landing Page */

?>

<?php get_header(); ?>

<?php

	// get information for this page
	$post = get_page_by_title( 'RLS Home Page', 'OBJECT', 'rls_homepage' );

?>

	<div id="primary">

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry group new-rls">

				<div class="section opener">

					<div class="separator group">

						<div class="intro">
	
							<?php echo wpautop(get_post_meta($post->ID, 'maincontent', true)); ?>
	
						</div>
	
						<div class="series-features">
	
							<div class="features">
	
								<h3 class=""><span>Event Series Features</span></h3>
								
								<?php echo wpautop(get_post_meta($post->ID, 'features', true)); ?>
			
							</div>
							
							<div class="event-location">
							
								<h4>Event Location:</h4>
								
								<p>Forum Conference and Events Center</p>
	
								<div class="find"><span>Find Event</span></div>
							
							</div>
	
						</div>

					</div>

				</div>

				<div class="next-scheduled-event-details">

					<div class="section next-scheduled-event group">
	
						<h3 class="section-title"><span>Next Scheduled Event</span></h3>
	
						<div class="details">
	
							<h4 class="date"><?php echo get_post_meta($post->ID, 'event_date', true); ?></h4>
			
							<h5 class="title"><?php echo get_post_meta($post->ID, 'event_title', true); ?></h5>
			
							<p class="speaker"><?php echo get_post_meta($post->ID, 'event_subtitle', true); ?></p>
			
							<p class="details"><?php echo wpautop(get_post_meta($post->ID, 'eventdescription', true)); ?></p>
	
						</div>

						<div class="sign-up">

							<div class="box">

								<div class="photo">
								
									<img src="/example.jpg" alt="Title" />
									
								</div>

								<div class="times">

									<ul>
			
										<li>
										
											<strong>Registration &amp; Networking</strong>
											
											<?php echo wpautop(get_post_meta($post->ID, 'registration_networking', true)); ?>
											
										</li>
					
										<li>
										
											<strong>Speaker</strong>
											
											<?php echo wpautop(get_post_meta($post->ID, 'speaker', true)); ?>
											
										</li>
			
									</ul>

								</div>

								<div class="cta">
		
									<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" onClick="_gaq.push(['_trackEvent', 'Buttons', 'SignUp', 'RLS',, false]);">Sign Up</a>
		
								</div>

							</div>
					 
							<div class="sponsor">
		
								<a href="http://www.wibc.com/" rel="external"><img src="/wp-content/uploads/2013/01/sponsor_wibc.png" alt="RLS Sponsor - WIBC" /></a>
		
							</div>

						</div>

					</div>
					
					<div class="section featured-speakers">
	
						<h3 class="section-title"><span>Featured Speakers</span></h3>
						 
						<ol class="events speakers group">
	
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
								
							<li class="speaker">
	
								<h4 class="name"><?php echo get_the_title($item->ID); ?></h4>
				
								<h5 class="date"><?php echo date('F d, Y', strtotime(get_post_meta( $item->ID, 'event_date_picker', true))); ?></h5>
				
								<p class="topic"><?php echo get_post_meta($item->ID, 'event_title', true); ?></p>
	
							</li>
	
							<?php
	
								endforeach;
	
							?>
	
						</ol>
	
					</div>

				</div>

			</div>

		</article>

	</div>

<?php get_footer(); ?>