<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>

    
<?php get_sidebar('left'); ?>


<div id="content">

<!-- default form -->
<!--title-->
<!--todo:remove h1 here-->
<h1>_</h1>

<?php 
//get title
?><!--make h2--><?php
$id = (int)$_GET['post_id'];
echo '<h4>'.get_the_title($id).'</h4>';
$post = get_post($id);
echo $post->post_content;
//echo '<pre>';
//print_r($post);
//echo '</pre>';

?>

<hr/>
    <h5>What people are saying about QiBelly</h5>
        
        
<!--blog posts-->
<?php 

$args = array( 'post_type'=> 'testimonial' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>

    <p><em><?php echo the_content();?></em></p>
    
    <p><strong><?php echo the_title();?></strong> <br />
    <?php echo get_post_meta(get_the_ID(), 'position&company', true);?></p>
    
    <h3>&#8212;</h3>
    
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<!--end to post-->
        
        <p><strong>Call 416.877.4106 or email paul@qibelly.com</strong></p>
<pp>&nbsp;</p>
<img src="<?php echo get_bloginfo('template_directory');?>/_graphics/ring_red.png" alt="ring" width="40" height="42">
<h1>&nbsp;</h1>
<!--end testimonial template-->

</div> <!-- end content -->

<?php get_sidebar('right'); ?>

<div id="clearboth"></div>
</div> <!-- end container -->

<?php get_footer(); ?>