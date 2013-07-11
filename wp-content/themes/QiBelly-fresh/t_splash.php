<?php

/*

Template Name: Splash

*/

?>



<?php get_header(); ?>

<?php get_sidebar('left'); ?>
			<section class="primary">
                <!--<ul class="slider-->
                <section class="slider">
                <div class="flexslider">
                <ul class="slides">
    
<!--					<li class="red">A no-nonsense<br/> approach to<br/> health and<br/> wellness</li>-->
<!--                <li>
                    <a class="fancybox" id="example6" title="Sed vel sapien vel sem tempus placerat eu ut tortor. Nulla facilisi. Sed adipiscing, turpis ut cursus molestie, sem eros viverra mauris, quis sollicitudin sapien enim nec est. ras pulvinar placerat diam eu consectetur." href="http://farm3.static.flickr.com/2779/4262915740_c631846165.jpg">
                        <img alt="example6" src="http://farm3.static.flickr.com/2779/4262915740_c631846165_m.jpg">
                    </a>
                </li>-->
  	    		<li>
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/qibelly-no-nonsense.PNG" />
  	    		</li>
<li>
                     <a class="fancybox fancybox.iframe" id="example6" title="" href="http://www.youtube.com/embed/6cC3kkw48E8?autoplay=1">
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/qibelly-meditation.PNG" />
                     </a>
  	    		</li>
                
               <!-- 	 <li>
                     <a class="fancybox" id="example6" title="Sed vel sapien vel sem tempus placerat eu ut tortor. Nulla facilisi. Sed adipiscing, turpis ut cursus molestie, sem eros viverra mauris, quis sollicitudin sapien enim nec est. ras pulvinar placerat diam eu consectetur." href="http://farm3.static.flickr.com/2779/4262915740_c631846165.jpg">
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
                     </a>
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/kitchen_adventurer_lemon.jpg" />
  	    		</li>
     		<li>
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/kitchen_adventurer_donut.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/kitchen_adventurer_caramel.jpg" />
  	    		</li>-->
				</ul>
                </div>
                </section>
                


				<?php

$id = (int)$_GET['post_id'];

$post = get_post($id);

echo $post->post_content;

?>
<hr/>
<h2>Weekly Group Classes</h2>
                <?php // echo do_shortcode('[wcs layout="list"]'); ?>
                <?php echo do_shortcode('[wcs layout="qibelly-list"]'); ?>

				<ul class="ctas">

					<li><a href="<?php echo get_permalink(26); ?>" title="View all the classes QiBelly has to offer" class="classes">View All Classes</a></li>

					<li><a href="<?php echo get_permalink(34); ?>" title="View locations" class="locations">Locations</a></li>

				</ul>

                <hr/>
				<h2>About Paul Lara</h2>
<?php

$page_id = 38;
$page_object = get_page( $page_id );
echo $page_object->post_excerpt;

?>

				<p><a href="<?php echo get_permalink(38);?>" class="more">Read more</a></p>
                
			</section>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>

<script>
$(document).ready(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
              $(".fancybox").fancybox();
            });
</script>