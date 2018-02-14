<div id="child-page-menu">
	<?php

	/* if this is a top level page */
	    $parent_title = get_the_title($post->ID);
	    $children = wp_list_pages("depth=1&title_li=&child_of=".$post->ID."&echo=0"); // form a list of the children of the current page

	/* if we ended up with any pages from the queries above */
	if ($parent_title) { ?>
	    <h2><?php echo $parent_title; ?></h2>
	<?php }

	if ($children) { ?>
	    <ul class="submenu">
	        <?php echo $children; /*print list of pages*/ ?>
	    </ul>
	<?php } ?>
	<?php dynamic_sidebar('Right Side Bar'); ?>
	<!--list all pages in sidebar http://codex.wordpress.org/Template_Tags/wp_list_pages-->



</div>
