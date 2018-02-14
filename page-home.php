<?php
/*
 * Template Name: Home
 *
 */
?>
<?php
if(isset($_POST['submit']) ) {
	$ToEmail = 'mail@rentonhistory.org';
	$EmailSubject = 'Renton History Museum Newletter Sign-Up';
	$mailheader = "From: noreply@rentonhistory.org \r\n";
	$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$MESSAGE_BODY = "Email: ".$_POST["email"]."";
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
}
?>
<?php get_header(); ?>

<div id="spotlight"> <?php echo do_shortcode('[metaslider id="31"]'); ?>
  <?php get_sidebar("spotlight-message"); ?>
  <div id="connect-banner">
    <div class="twoThirdPage">
      <div class="oneThirdLeft">
        <a href="<?php bloginfo('url'); ?>/membership"><button class="member-button">Become a Member</button></a>
      </div>
      <div class="oneThirdRight">
        <form action="<?php bloginfo('url'); ?>/thank-you" method="post" id="newsletter" title="newsletter">
          <p>
            <label for="email"><strong>Sign Up For Our Newsletter</strong></label>
          </p>
          <input name="email" type="email" id="email">
          <button type="submit" name="submit"></button>
        </form>
      </div>
    </div>
    <div class="oneThirdPage"><!--Social Media icons go here-->
      <ul class="socialMedia">
        <li><a href="https://www.facebook.com/pages/Renton-History-Museum/41575839944?ref=sgm" target="_blank"></a></li>
        <li><a href="https://twitter.com/rentonhistory" target="_blank"></a></li>
        <li><a href="https://foursquare.com/v/renton-history-museum/4b6b63d5f964a52083052ce3" target="_blank"></a></li>
      </ul>
    </div>
  </div>
</div>
<!--end spotlight-->

<div id="page_info">
  <div class="twoThirdPage">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <h2>What's Happening</h2>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, there are no posts to display</p>
    <?php endif; ?>
  </div>
  <aside class="oneThirdPage">
    <div class="getInvolved">
      <div class="sideText">
        <h3>Get Involved</h3>
        <ul>
          <li><a href="<?php bloginfo('url'); ?>/join-us">Volunteer</a></li>
          <li><a href="<?php bloginfo('url'); ?>/donate-online">Giving</a></li>
        </ul>
      </div>
    </div>
    <div class="researchCollections">
      <div class="sideText">
        <h3><a href="<?php bloginfo('uri');?>/research">Research
          &amp;<br>Collections</a></h3>
      </div>
    </div>
  </aside>
</div>
<div class="clear"></div>

<?php get_footer(); ?>
