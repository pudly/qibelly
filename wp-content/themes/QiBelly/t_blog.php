<?php
/*
Template Name: Blog
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

<!--blog posts-->
<?php 

$args = array( 'post_type'=> 'post' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    ?><!--make h2-->
<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>"><?php the_title('<h4>','</h4>');?></a><?php
    //the_title('<h4>','</h4>');
    the_excerpt(); 
    ?>
    <hr/>
    <?php
endwhile; else: 
    
?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<!--end to post-->

<p>&nbsp;</p>
<img src="<?php echo get_bloginfo('template_directory');?>/_graphics/ring_red.png" alt="ring" width="40" height="42">
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>

</div> <!-- end content -->

<?php get_sidebar('right'); ?>

<div id="clearboth"></div>
</div> <!-- end container -->

<?php get_footer(); ?>