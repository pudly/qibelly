<?php
/*
Template Name: Videos
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
?>
		
				<ul class="items" id="videos">
<?php 

$args = array( 'post_type'=> 'video' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>
<li> <a href="#" rel="<?php echo get_the_ID() ?>">
	<div class="">
	<?php
    the_title('<h3>','</h3>');
    
//    //$allKeys = get_post_custom_keys(get_the_ID());
//    $location_address=get_post_meta(get_the_ID(), 'location-address', true); 
//    
//        if($location_address)
//        {
/*        ?>        
            <p><?php echo $location_address;?></p>
        //<?php }*/?>
    
    <?php the_content(); ?>
    </div>
    </a>
</li>
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
				</ul>
			</section>			
<?php  get_sidebar('right'); ?>

<?php get_footer(); ?>