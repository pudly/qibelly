<?php

/*

Template Name: Splash

*/

?>



<?php get_header(); ?>

<?php get_sidebar('left'); ?>

			<section class="primary">
                <ul class="slider">

					<li class="red">A no-nonsense<br/> approach to<br/> health and<br/> wellness</li>

				</ul>

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