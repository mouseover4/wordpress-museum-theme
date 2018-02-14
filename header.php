<?php

	//global $post;
	//$pagename = get_post_id();
	
	//post-<?php the_ID();
	//$post->ID;

	/*Setting up your parameters for your menu 
	 * which you will use in your header
	 */
	$mainMenu = array(
		"theme_location" => "main_menu",
		"container" => "nav",
		"container_class" => "main_nav_tabs",
		"container_id" => "main_menu",
		"menu" => "Main Navigation Menu",
		"depth" => 1
		);
		
	$footerMenu = array(
		"theme_location" => "footer_menu",
		"container" => "",
		"container_class" => "",
		"container_id" => "",
		"menu" => "Footer Menu",
		"depth" => 1
		);
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title><?php bloginfo("name"); ?></title>       
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">		
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?> <!--enables javascript-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>		
		<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>		
	</head>
	<body id="post-<?php the_ID(); ?>">
		<div id="container">
		<header id="main_header"> 
			<hgroup class="oneThirdPage">
				<?php get_sidebar("hours"); ?>
				<?php get_search_form(); ?>
			</hgroup>			
			<hgroup class="twoThirdPage">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-text.png" id="logo"></a>	
			</hgroup>
            <div id="mobile-hours">HOURS Tues - Sun 10am to 4pm</div>
			<div class="clear"></div>
			
			<aside id="donate">
				<ul>
					<li class="orange"><a href="<?php bloginfo('url'); ?>/donate-online">Donate</a></li>
				</ul>
			</aside>
			<a href="#main_menu" id="nav_collapse">Menu &equiv;</a>
			<?php wp_nav_menu($mainMenu); ?>
		</header>		
		<div class="clear"></div>










