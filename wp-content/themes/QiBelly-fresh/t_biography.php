<?php
/*
Template Name: Biography
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
<section class="primary">
<?php
$id = (int)$_GET['post_id'];
//echo '<h4>'.get_the_title($id).'</h4>'; ?>

<!--<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">--><?php the_title('<h2>','</h2>');?><!--</a>-->

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

<!--<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">--><?php the_title('<h2>','</h2>');?><!--</a>-->

    <?php the_content(); ?>


<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<!--end to post-->


	</section>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>