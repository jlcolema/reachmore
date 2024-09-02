		</div>

	</div>

	<footer id="footer">

		<div class="inner-wrap">

			<?php

				/*
					The footer widget area is triggered if any of the areas have widgets. So let's check that first.

					If none of the sidebars have widgets, then let's bail early.
				*/

					if (   ! is_active_sidebar( 'footer-widget-1'  )
						&& ! is_active_sidebar( 'footer-widget-2' )
						&& ! is_active_sidebar( 'footer-widget-3'  )
					)

					return;

				// If we get this far, we have widgets. Let do this.

			?>

			<div id="supplementary" class="group">

				<!-- First Widget Area -->

				<div id="first" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>

				<!-- Second Widget Area -->

				<div id="second" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>

				<!-- Third Widget Area -->

				<div id="third" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>

			</div>

			<!-- <p id="copyright" class="source-org vcard copyright"><small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small></p> -->

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>