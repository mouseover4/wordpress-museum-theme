<?php
/**
 * The template for displaying search form in Renton History Museum Template
 * See http://codex.wordpress.org/Function_Reference/get_search_form
 */
?>	
<div id="wp-custom-search">
	<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
	<div id="search-form-inner">
	<input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" />
<!--	 <input type="image" src="<?php bloginfo('template_directory'); ?>/images/search.png" class="button" style="position:absolute;margin:1px 0 0 -20px;" value=""/> -->
	</div>
	</form>
</div>