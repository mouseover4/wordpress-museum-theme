<?php get_header(); ?>
<?php
	$title = "page title";
	
	if(is_day())
	{
		$title = "You are viewing the " . get_the_date() . " daily archives";
	}
	else if(is_month())
	{
		$title = "You are viewing the " . get_the_date("F Y") . " archives";
	}
	else if(is_year())
	{
		$title = "You are viewing the " . get_the_date("Y") . " yearly archives";
	}
	else 
	{
		$title = "You are viewing the " . single_cat_title("", false) . " archives";
	}
?>
	<div id="spotlight_blog" style="min-height:3.75em;">
	</div><!--end spotlight-->
	<div id="blog_page_info">
		<div class="twoThirdPage">	
			<h2><?php echo $title; ?></h2>
			<?php if(have_posts()): ?>			
				<?php while(have_posts()):?>
					<?php the_post(); ?>			
					<article id="post-<?php the_ID(); ?>" <?php post_class("standard_post"); ?>>
						<h3>
							<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a>
						</h3>						
						<?php the_post_thumbnail('post-featured-image'); ?>
						<p><?php the_content();?></p>
						<p>Written by <?php the_author(); ?></p>	
						<p><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M j'); ?></time></p>
						<?php comments_number("0 comments", "1 comment", "% comments"); ?>
						
						<p><small>Written by <?php the_author(); ?> on <?php the_time('M j');?>, 
							<?php comments_number("0 comments", "1 comment", "% comments"); ?></small></p>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<p>WRITE POSTS!</p>
			<?php endif; ?>		
		</div><!--end twoThirdPage-->
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
		</div><!--end oneThirdPageBlog-->		
	</div>	
<?php get_footer(); ?>
	
	
	
	
	
	
	
	
	
	
	
	
