<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">
<?php 
//get title
?><!--make h2--><?php
$id = (int)$_GET['post_id'];
echo '<h2>'.get_the_title($id).'</h2>';
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
        
			</section>
			
<?php get_sidebar('right'); ?>

<?php get_footer(); ?>