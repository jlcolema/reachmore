
			
				<?php

					$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
					$image_url = $image_url[0];
					if ( $image_url != '' ) {
						echo '<div class="inline-image"><img src="' . $image_url . '" alt="' . $post->post_title . '" /></div>';
					}
						
				?>