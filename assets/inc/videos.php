
				
					<?php $vendor = parse_url($video_url); ?>
					
					<?php
					
						if ( !isset($vheight) ) {
							$vheight = 380;
						}
						if ( !isset($vwidth) ) {
							$vwidth = 670;
						}
					
					?>
				
					<?php if ($vendor['host'] == 'www.youtube.com' || $vendor['host'] == 'youtu.be' || $vendor['host'] == 'www.youtu.be' || $vendor['host'] == 'youtube.com'){ ?>
				
						<?php if ($vendor['host'] == 'www.youtube.com') { parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars ); ?>
				            <iframe width="<?php echo $vwidth; ?>" height="<?php echo $vheight; ?>" src="http://www.youtube.com/embed/<?php echo $my_array_of_vars['v']; ?>?modestbranding=1;rel=0;showinfo=0;autoplay=0;autohide=1;yt:stretch=<?php echo $vwidth; ?>:<?php echo $vheight; ?>;" frameborder="0" allowfullscreen></iframe>
				        <?php } else { ?>
				            <iframe width="<?php echo $vwidth; ?>" height="<?php echo $vheight; ?>" src="http://www.youtube.com/embed<?php echo parse_url($video_url, PHP_URL_PATH);?>?modestbranding=1;rel=0;showinfo=0;autoplay=0;autohide=1;yt:stretch=<?php echo $vwidth; ?>:<?php echo $vheight; ?>;" frameborder="0" allowfullscreen></iframe>
				        <?php } } ?>
				
					<?php if ($vendor['host'] == 'vimeo.com'){ ?>
						<iframe src="http://player.vimeo.com/video<?php echo parse_url($video_url, PHP_URL_PATH);?>?title=0&amp;byline=0&amp;portrait=0" width="<?php echo $vwidth; ?>" height="<?php echo $vheight; ?>" frameborder="0"></iframe>
					<?php } ?>
						
					<?php if ($vendor['host'] == 'app.bigbluewagon.com'){ ?>
						<iframe frameborder="0" width="<?php echo $vwidth; ?>" height="<?php echo $vheight; ?>" scrolling="no" src="<?php echo $video_url ?>"></iframe>
					<?php } ?>