<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title(); ?></title>

	<meta name="Copyright" content="Copyright 2012 ReachMore. All Rights Reserved.">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/-/media/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/-/media/apple-touch-icon.png">

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/-/js/selectivizr.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>

	<div id="page">

		<header id="header">

			<hgroup>

				<h1 id="site-title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

				<h2 id="site-description"><?php bloginfo('description'); ?></h2>

				<p id="phone">317.576.8492</p>

			</hgroup>

			<nav id="access">

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>

		</header>

		<div id="body" class="group">
