<?php
/*
 * Template Name: Visit Us Page
 *
 */
?>

<?php get_header(); ?>
		<div id="spotlight">
			<?php echo do_shortcode('[metaslider id="31"]'); ?>
			<?php get_sidebar("right"); ?>
			<?php get_sidebar("pricing"); ?>
			<div id="main-page-banner">
				<div class="twoThirdPage">
			        <div class="oneThirdLeft">
			           <a href="<?php bloginfo('url'); ?>/membership"><button class="member-button">Become a Member</button></a>
			        </div>
			    </div>
			    <div class="oneThirdPage">
			        <ul class="socialMedia">
			          <li><a href="https://www.facebook.com/pages/Renton-History-Museum/41575839944?ref=sgm" target="_blank"></a></li>
                      <li><a href="https://twitter.com/rentonhistory" target="_blank"></a></li>
                      <li><a href="https://foursquare.com/v/renton-history-museum/4b6b63d5f964a52083052ce3" target="_blank"></a></li>
			        </ul>
			    </div>
		    </div>
		</div><!--end spotlight-->
		<div id="page_info">
			<div id="main_page_content" class="twoThirdPage">
				<span id="stuff">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<h2>About</h2>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p>Sorry, there are no posts to display</p>
				<?php endif; ?>
				</span>
			</div>
				<?php get_sidebar("map"); ?>
		</div>
<?php get_footer(); ?>
