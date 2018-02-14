<?php get_header(); ?>

		<div id="spotlight_blog" style="min-height:3.75em;">
		</div><!--end spotlight-->
		<div id="blog_page_info">
			<div class="twoThirdPage">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<article class="blog-post">
					<h2><?php the_title(); ?></h2>
					<section><?php
					   if (is_mobile()) {
					   the_post_thumbnail('mobile-featured-image');
					   } else {
					   the_post_thumbnail('post-featured-image');
					} ?></section>
					<?php the_content(); ?>
				</article>
				<aside class="blog-page-aside">
				<p><small>Author: <?php the_author(); ?> &nbsp; &nbsp; Date: <?php the_time('m-d-Y');?>
					&nbsp; &nbsp;Category: <?php
					$category = get_the_category();
					echo $category[0]->cat_name;
					?></small></p>
				</aside>
				<?php endwhile; else: ?>
					<p>Sorry, there are no posts to display</p>
				<?php endif; ?>
			</div>
			<div class="oneThirdPage" id="oneThirdPageBlog">
				<h2>Blog</h2>
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
