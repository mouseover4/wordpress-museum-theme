<?php get_header(); ?>
		<div id="spotlight_blog" style="min-height:3.75em;">
		</div><!--end spotlight-->
		<div id="blog_page_info">
			<div class="twoThirdPage">	
				<h2>Search results for: <?php echo get_search_query(); ?></h2>
				<?php if(have_posts()): ?>			
					<?php while(have_posts()):?>
						<?php the_post(); ?>			
						<article id="post-<?php the_ID(); ?>" <?php post_class("standard_post"); ?>>
							<h3>
								<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
								</a>
							</h3>							
							<?php the_post_thumbnail(); ?>
							<?php the_content();?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<!--<?php get_search_form(); ?>-->
					<p>Sorry, there are no search results matching your query.<br>
					   Please try your search again.
					</p>
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