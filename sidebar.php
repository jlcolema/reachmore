<div id="secondary">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

	<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

	<h2>Archives</h2>

	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

	<h2>Categories</h2>

	<ul>
		<?php wp_list_categories('show_count=1&title_li='); ?>
	</ul>

	<?php endif; ?>

</div>