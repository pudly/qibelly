<?php
/*
Template Name: Locations
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
<!--blog posts-->
<?php 

$args = array( 'post_type'=> 'location' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    the_title('<h5 class="location">','</h5>');
    
    //$allKeys = get_post_custom_keys(get_the_ID());
    $location_address=get_post_meta(get_the_ID(), 'location-address', true); 
    
    ?>

    <dl>
        <?php
        
        if($location_address)
        {
        ?>        
            <dt>Address:</dt>
            <dd><?php echo $location_address;?></dd>
        
        <?php }?>
        
            <!--classes offered here-->
    
    </dl>
    
    <?php the_content(); ?>
    
    

    <hr/>
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