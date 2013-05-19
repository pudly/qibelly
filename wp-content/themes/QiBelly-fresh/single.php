<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">

<?php 
//get title
?><!--make h2--><?php
//$id = (int)$_GET['post_id'];
//echo '<h4>'.get_the_title($id).'</h4>';
//$post = get_post($id);
//echo $post->post_content;
//echo '<pre>';
//print_r($post);
//:echo '</pre>';
?>

<!--blog posts-->
<?php 

//$args = array( 'post'=> 'post' );
//query_posts( $args ); 


if ( have_posts() ) : while ( have_posts() ) : the_post(); 

if($post->post_type == "post")
{
    ?><!--make h2-->
    
    <?php
    
}

    the_title('<h2>','</h2>');
    ?>
    
    
    <div class="featured-image"><?php the_post_thumbnail('blog-deets-size');?></div>
    <?php
        $post_categories = wp_get_post_categories( get_the_ID() );
    
        //$allKeys = get_post_custom_keys(get_the_ID());

        $day=get_post_meta(get_the_ID(), 'day', true);
        $time=get_post_meta(get_the_ID(), 'time', true);
        $price=get_post_meta(get_the_ID(), 'price', true);

        $locations_str=get_post_meta(get_the_ID(), 'class-locations', true);
        $locations = explode(",", str_replace(" ", "", $locations_str));
        $experience_level=get_post_meta(get_the_ID(), 'experience-level', true);
        
        ?>
			<div class="desc">
                <?php the_content(); ?>
                
                <!--<p><strong>dont need to do another loop here...?</strong></p>-->
 			
			</div>
			<div class="details">
                <?php 
                    if($locations_str){
                        
                        foreach($locations as $location)
                        {
                            $location_post = get_posts( array( 'post_type' => 'location', 'name'=> $location));
                            //echo '<pre>';
                            //print_r($location_post);
                            
                            //echo $location_post[0]->ID;
                            $gmap_image_url=get_post_meta($location_post[0]->ID, 'gmap-image-url', true);                            
                            $location_address=get_post_meta($location_post[0]->ID, 'location-address', true);
                                                        
                            if($gmap_image_url)
                            {
                        ?>
                            
                            
            	<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $gmap_image_url; ?>&amp;zoom=14&amp;size=420x200&amp;sensor=false&amp;markers=<?php echo $gmap_image_url; ?>" class="gmap" alt="<?php echo $location_post[0]->post_title; ?>">
               <p><strong><?php echo $location_post[0]->post_title; ?></strong><br>
                  <?php echo $location_address; ?> 
                   
               </p>
               
                <?php //echo '</pre>';
                            }
                        }
                    }
                        ?>
            <?php if($price){ ?>
                <span class="price"><?php echo $price; ?></span>
            <?php } ?>

			<?php if($experience_level) { ?>
        		<span class="experience"><?php echo $experience_level;//false if you want an array?></span>	
        	<?php } ?>
                <dl class="time">
                    <?php
                    
                    if($day){
                    ?> 
                        <dt><?php echo $day; ?></dt>
                    <?php
                    }

                    if($time){ ?> 
                        <dd><?php echo $time; ?></dd>
                    <?php } ?>
                </dl>
                        
        <?php 

         /*
        if($day)
        {
        ?> 
        <dt>When:</dt>
        <dd><?php echo $day; ?>
        <?php
        }
        
        if($time)
        {
        ?> 
        <?php echo $time; ?></dd>
        <br/>
        <?php
        }
         
        
        if($location)
        {
        ?> 
        <dt>Location:</dt>
        <dd><!--CREATE CUSTOM LOCATION RELATIONSHIP--></dd>
        <?php
        }*/
        
		?>
        
            </div>      
       <?php if($post->post_type != "faq" || $post->post_type != "blog")   {?>      
            <p><a href="<?php echo get_permalink(34); ?>" class="more">Book a class</a></p>
         <?php } 
         else { ?>
            <a href="<?php echo get_permalink(30); ?>" title="Return to FAQs" class="more back">Return to FAQs</a>
         <?php } ?>
    
    <?php
endwhile; else: 
?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php     if($post->post_type == "post")
{
?>
            <div id="blog-share">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                    </div>
                    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4eaf6059608aba85"></script>
            <!-- AddThis Button END -->
            </div>
            <div id="comments">
                    <div class="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="10" data-width="420"></div>
            </div>

        <p><a href="<?php echo get_bloginfo('wpurl');?>/?page_id=32" title="Return to blog list" class="more back">Return to blog list</a></p>

<?php	
	
}
?>

	<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<!--end to post-->


			</section>
			
<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
