<?php get_header(); ?>

	<div id="spotlight_blog" style="min-height:3.75em;">
	</div><!--end spotlight-->

	<div id="blog_page_info">
		<div class="twoThirdPage" id="single-post">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><?php the_title(); ?></h2>
				<section><?php
				   if ( wp_is_mobile() ) {
				   the_post_thumbnail('mobile-featured-image');
				   } else {
				   the_post_thumbnail('post-featured-image');
				} ?></section>
				<!--<?php the_post_thumbnail('post-featured-image'); ?>-->
				<p><?php the_content(); ?></p>
				<p><small>Posted
					<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M j'); ?></time>
					by <?php the_author(); ?>
					<?php comments_number("0 comments", "1 comment", "% comments"); ?>
				</small></p>
				<p>Listed in: <?php the_category(", "); ?></p>
				<?php if(get_the_tags()): ?>
					<p><?php the_tags(); ?></p>
				<?php endif; ?>
			</article>
			<?php endwhile; else: ?>
				<p>Sorry, there are no posts to display</p>
			<?php endif; ?>
			<?php comments_template(); ?>
			<ul>
				<?php previous_post_link("<li>%link</li>", "&lt; Previous"); ?>
				<?php next_post_link("<li>%link</li>", "Next &gt;"); ?>
			</ul>
	    </div>
	    <div class="oneThirdPage" id="oneThirdPageBlog">
			<!-- <h2>Blog</h2> -->
			<?php get_sidebar("blog"); ?>
			<div id="social_blog"><!--Social Media icons go here-->
	        	<ul class="socialMedia">
		          <li><a href="https://www.facebook.com/pages/Renton-History-Museum/41575839944?ref=sgm" target="_blank"></a></li>
                  <li><a href="https://twitter.com/rentonhistory" target="_blank"></a></li>
                  <li><a href="https://foursquare.com/v/renton-history-museum/4b6b63d5f964a52083052ce3" target="_blank"></a></li>
		        </ul>
	        </div>
		</div><!--end oneThirdPage--->
	</div><!--end blog page info-->
<?php get_footer(); ?>
