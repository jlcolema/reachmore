<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'reach', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists('core_mods') ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>

	function removeHeadLinks() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
	}

	add_action('init', 'removeHeadLinks');
	remove_action('wp_head', 'wp_generator');

	// This theme uses wp_nav_menu() in one location.

	register_nav_menu( 'primary', __( 'Primary Menu', 'reach' ) );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images

	add_theme_support( 'post-thumbnails' );

	// Widget Areas

	if (function_exists('register_sidebar')) {

		register_sidebar(array(
			'name' => __('Sidebar Widgets','reach' ),
			'id'   => 'sidebar-widgets',
			'description'   => __( 'These are widgets for the sidebar.','reach' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));

		register_sidebar(array(
			'name' => __('Blog Widgets','reach' ),
			'id'   => 'blog-widgets',
			'description'   => __( 'These are widgets for the blog.','reach' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));

		register_sidebar( array(
			'name' => __( 'Home - Speaking', 'reach' ),
			'id' => 'home-speaking-widget',
			'description' => __( 'Speaking content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Home - Coaching', 'reach' ),
			'id' => 'home-coaching-widget',
			'description' => __( 'Coaching content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Home - Box - Column 1', 'reach' ),
			'id' => 'home-box-column-1-widget',
			'description' => __( 'Column 1 Box content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Home - Box - Events', 'reach' ),
			'id' => 'home-box-events-widget',
			'description' => __( 'Event Box content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Home - Box - Blog', 'reach' ),
			'id' => 'home-box-blog-widget',
			'description' => __( 'Blog Box content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Home - Box - Foundation', 'reach' ),
			'id' => 'home-box-foundation-widget',
			'description' => __( 'Foundation Box content', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Footer Area One', 'reach' ),
			'id' => 'footer-widget-1',
			'description' => __( 'An optional widget area for your site footer', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	
		register_sidebar( array(
			'name' => __( 'Footer Area Two', 'reach' ),
			'id' => 'footer-widget-2',
			'description' => __( 'An optional widget area for your site footer', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	
		register_sidebar( array(
			'name' => __( 'Footer Area Three', 'reach' ),
			'id' => 'footer-widget-3',
			'description' => __( 'An optional widget area for your site footer', 'reach' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

	}
    
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
	
	
	
	/*-------------------------------------------
		Dump
	-------------------------------------------*/
	function dump($data) {
	    if(is_array($data)) { //If the given variable is an array, print using the print_r function.
	        print "<pre>-----------------------\n";
	        print_r($data);
	        print "-----------------------</pre>";
	    } elseif (is_object($data)) {
	        print "<pre>==========================\n";
	        var_dump($data);
	        print "===========================</pre>";
	    } else {
	        print "=========&gt; ";
	        var_dump($data);
	        print " &lt;=========";
	    }
	} 
	
	if (!is_admin()) {  
		
		/*-------------------------------------------
			Register styles
		-------------------------------------------*/
		add_action('init','tune_register_styles');
		function tune_register_styles() {
			wp_register_style( 'main',	'/wp-content/themes/reach/style.css',	array(), null, 'screen, handheld' );
			wp_register_style( 'emma',	'/css/emma.css',						array(), null, 'all' );			
		}
		
		
		/*-------------------------------------------
			Enqueue styles
		-------------------------------------------*/
		add_action( 'wp_enqueue_scripts', 'tune_enqueue_styles' );
		function tune_enqueue_styles() {
			wp_enqueue_style( 'main' );
			wp_enqueue_style( 'emma' );
		}
		
		
		/*-------------------------------------------
			Deregister scripts
		-------------------------------------------*/
		add_action('init','tune_deregister_scripts');
		function tune_deregister_scripts() {
			wp_deregister_script( 'jquery' );
		}
		
		/*-------------------------------------------
			Register scripts
		-------------------------------------------*/
		add_action('init','tune_register_scripts');
		function tune_register_scripts() {
			wp_register_script( 'modernizr', 	'/js/modernizr.js', 												array(),	null, 	false );
			wp_register_script( 'jquery', 		'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', 	array(),	null, 	false );
			wp_register_script( 'typekit', 		'http://use.typekit.net/ylr2gjj.js', 								array(), 	null, 	false );
			wp_register_script( 'functions', 	'/js/functions.js', 												array(), 	null, 	true );
			
		}
		
		/*-------------------------------------------
			Enqueue scripts
		-------------------------------------------*/
		add_action( 'wp_enqueue_scripts', 'tune_enqueue_scripts' );
		function tune_enqueue_scripts() {
			wp_enqueue_script( 'modernizr' );
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'typekit' );
			wp_enqueue_script( 'functions' );
		}
	
	}
	
	
	function fb_change_mce_options($initArray) {
		$ext = 'pre[id|name|class|style],iframe[align|longdesc| name|width|height|frameborder|scrolling|marginheight| marginwidth|src],@[id|class|style|title|itemscope|itemtype|itemprop|datetime|rel],div,dl,ul,dt,dd,li,span,a|rev|charset|href|lang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur],script[charset|defer|language|src|type]';
	
		if ( isset( $initArray['extended_valid_elements'] ) ) {
			$initArray['extended_valid_elements'] .= ',' . $ext;
		} else {
			$initArray['extended_valid_elements'] = $ext;
		}
	
		return $initArray;
	}
	add_filter('tiny_mce_before_init', 'fb_change_mce_options');