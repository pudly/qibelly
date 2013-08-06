<?php

/*

Template Name: Splash2

*/

?>



<?php get_header(); ?>

<?php get_sidebar('left'); ?>

			<section class="primary">
                <ul class="slider">

					<li class="red">A no-nonsense<br/> approach to<br/> health and<br/> wellness</li>

				</ul>
                <div>
                    <a class="fancybox fancybox.iframe" id="example6" title="QiBelly Project: <a href='http://www.someclient.com'>View  Videos</a>" href="http://www.youtube.com/embed/6cC3kkw48E8?autoplay=1">
  	    	    <img width="100%" src="<?php echo get_bloginfo('template_directory');?>/assets/img/qibelly-homepage-vidmeditation.jpg" />
                     </a>
                </div>
				<div class="intro">

				<?php

$id = (int)$_GET['post_id'];

$post = get_post($id);

echo $post->post_content;
?>
</div>
<?php
/*
?>

<hr/>
<h2>Weekly Group Classes</h2>
                <?php // echo do_shortcode('[wcs layout="list"]'); ?>
                <?php echo do_shortcode('[wcs layout="qibelly-list"]'); 
 */ ?>


				<ul class="ctas">

					<li><a href="<?php echo get_permalink(26); ?>" title="View all the classes QiBelly has to offer" class="classes">View All Classes</a></li>

					<li><a href="<?php echo get_permalink(34); ?>" title="View locations" class="locations">Locations</a></li>

				</ul>

               <!-- <hr/>-->
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
//              $('.flexslider').flexslider({
//                animation: "slide"
//              });
              $(".fancybox").fancybox({
				//wrapCSS    : 'fancybox-custom',
				closeClick : true,

				//openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

});
            
            //<a class="gallery" href="delete/big.png" ><img src="delete/thumb.png" width="115" height="115" alt="" /></a>

</script>