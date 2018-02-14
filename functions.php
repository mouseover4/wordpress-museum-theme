<?php 
	register_nav_menus(array(
		"main_menu" => "Main Navigation Menu",
		"footer_menu" => "Footer Menu"
	)); 
	
	add_theme_support('post-thumbnails');
	
	//true = hard crop; false = soft crop
	add_image_size("post-thumb", 200, 200, true);
	add_image_size("post-featured-image", 560, 180, true); 
	add_image_size("mobile-featured-image", 300, 100, true);
	
	register_sidebar(array(
		"name" => "Right Side Bar",
		"id" => "right_aside",
		"description" => "Right Side Bar",
		"before_widget" => "<div class='sidebar'>",
		"after_widget" => "</div><!-- end sidebar -->",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Spotlight Sidebar",
		"id" => "spotlight_aside",
		"description" => "Sidebar for spotlight blurb",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h2>",
		"after_title" => "</h2>"
	));
	
	register_sidebar(array(
		"name" => "Social Media Sidebar",
		"id" => "social_media_aside",
		"description" => "Sidebar for social media icons",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Hours Sidebar",
		"id" => "hours_aside",
		"description" => "Sidebar for museum hours",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "",
		"after_title" => ""
	));
	
	register_sidebar(array(
		"name" => "Get Involved",
		"id" => "get_involved_aside",
		"description" => "Sidebar for homepage",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Calendar",
		"id" => "calendar_aside",
		"description" => "Sidebar for events calendar",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Address",
		"id" => "address_aside",
		"description" => "Sidebar for museum address",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h4>",
		"after_title" => "</h4>"
	));
	
	register_sidebar(array(
		"name" => "Footer Menu",
		"id" => "footer_aside",
		"description" => "Sidebar for footer menu",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h4>",
		"after_title" => "</h4>"
	));
	
	register_sidebar(array(
		"name" => "About",
		"id" => "about_aside",
		"description" => "Sidebar for footer info",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h4>",
		"after_title" => "</h4>"
	));
	
	register_sidebar(array(
		"name" => "Google Map",
		"id" => "map_aside",
		"description" => "Sidebar with map",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h4>",
		"after_title" => "</h4>"
	));
	
	register_sidebar(array(
		"name" => "Pricing",
		"id" => "pricing_aside",
		"description" => "Sidebar with prices",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Your Donation",
		"id" => "donation_aside",
		"description" => "Sidebar with donation info",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h2>",
		"after_title" => "</h2>"
	));
	
	register_sidebar(array(
		"name" => "Blog",
		"id" => "blog_aside",
		"description" => "Sidebar for blog page",
		"before_widget" => "",
		"after_widget" => "",
		"before_title" => "<h2>",
		"after_title" => "</h2>"
	));
	
	
?>