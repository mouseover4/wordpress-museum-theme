    <footer>
    	<div class="bg">
    		<div class="twoThirdPage">
		    	<?php get_sidebar("about"); ?> 
		    	<?php get_sidebar("footer-menu"); ?> 
	    	</div>
	    	<div class="oneThirdPage">
	    		<?php get_sidebar("address"); ?> 
	    		<p><h4><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></h4></p>
	    	</div>
    	</div><!--end bg-->
    </footer>
    <?php wp_footer(); ?>	
    </div><!--end container-->
	
   </body>	
</html>