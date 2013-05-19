<?php
/*
Template Name: Biography
*/
?>

<?php get_header(); ?>

    
<?php get_sidebar('left'); ?>


<div id="content">

<!-- default form -->
<!--title-->
<!--todo:remove h1 here-->
<h1>_</h1>

<!--todo: make h2-->

<?php
$id = (int)$_GET['post_id'];
//echo '<h4>'.get_the_title($id).'</h4>'; ?>

<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>"><?php the_title('<h4>','</h4>');?></a>

<?php

$post = get_post($id);
echo $post->post_content;

//echo '<pre>';
//print_r($post);
//echo '</pre>';

?>
        
        
<!--blog posts-->
<?php 

$args = array( 'post_type'=> 'lineage-training' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

//echo '<pre>';
//print_r($post);
//echo '</pre>';

    ?>
    <!--<h1>_</h1>-->

    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>"><?php the_title('<h4>','</h4>');?></a>
    
    <?php the_content(); ?>
    

    <h3>&#8211;</h3>
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<!--end to post-->
        



<p><strong>Call 416.877.4106 or email paul@qibelly.com</strong></p>
<p>&nbsp;</p>
<img src="<?php echo get_bloginfo('template_directory');?>/_graphics/ring_red.png" alt="ring" width="40" height="42">
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<!--end location template-->

</div> <!-- end content -->

<?php get_sidebar('right'); ?>

<div id="clearboth"></div>
</div> <!-- end container -->

<?php get_footer(); ?>