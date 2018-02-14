<?php
/*
 * Template Name: Research
 *
 */
?>

<?php get_header(); ?>

		<div id="spotlight_blog" style="min-height:3.75em;">
		</div><!--end spotlight-->
		<div id="blog_page_info">
			<div class="twoThirdPage">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<article>
					<?php the_post_thumbnail('post-featured-image'); ?>
					<?php the_content(); ?>
				</article>

				<?php endwhile; else: ?>
					<p>Sorry, there are no posts to display</p>
				<?php endif; ?>

			</div>
			<div class="oneThirdPage" id="oneThirdPageBlog">
				<!--<h2>Research</h2>-->
				<?php get_sidebar("blog"); ?>
				<div id="social_blog"><!--Social Media icons go here-->
		        	<ul class="socialMedia">
			          <li><a href="https://www.facebook.com/pages/Renton-History-Museum/41575839944?ref=sgm" target="_blank"></a></li>
                      <li><a href="https://twitter.com/rentonhistory" target="_blank"></a></li>
                      <li><a href="https://foursquare.com/v/renton-history-museum/4b6b63d5f964a52083052ce3" target="_blank"></a></li>
			        </ul>
		        </div>
			</div>
		</div>

<?php get_footer(); ?>
