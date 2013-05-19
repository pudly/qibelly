<?php
/*
Template Name: Locations
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
<br>
<iframe width="420" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=207712542571426717611.0004c5efb9e4943254dd2&amp;ie=UTF8&amp;t=m&amp;ll=43.659179,-79.421883&amp;spn=0.086933,0.144196&amp;z=12&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=207712542571426717611.0004c5efb9e4943254dd2&amp;ie=UTF8&amp;t=m&amp;ll=43.659179,-79.421883&amp;spn=0.086933,0.144196&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">QiBelly</a> in a larger map</small><br><br>
<?php
$post = get_post($id);
echo $post->post_content;

//echo '<pre>';
//print_r($post);
//echo '</pre>';

?>
				<!--end to post-->
        
			</section>
			<section class="secondary">
				
				<ul class="items" id="locations">
<?php 

$args = array( 'post_type'=> 'location' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>
<li> <a href="#" rel="<?php echo get_the_ID() ?>">
	<div class="desc">
	<?php
    the_title('<h3>','</h3>');
    
    //$allKeys = get_post_custom_keys(get_the_ID());
    $location_address=get_post_meta(get_the_ID(), 'location-address', true); 
    
        if($location_address)
        {
        ?>        
            <p><?php echo $location_address;?></p>
        <?php }?>
    
    <?php the_content(); ?>
    </div>
    </a>
</li>
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
				</ul>
			</section>			
<?php // get_sidebar('right'); ?>

<?php get_footer(); ?>