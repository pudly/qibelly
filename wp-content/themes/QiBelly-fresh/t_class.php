<?php
/*
Template Name: Classes - Most Popular
*/

/**
 *removing content from the page. There is a template redirect forwarding classes directly to the category page. 
 */


?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">
				
	<?php 
        $args = array( 'post_type'=> 'class', 'category_name'=>'most-popular', 'posts_per_page' => '5');
        
        //echo $_REQUEST['cat'];
        
        if($_GET['cat'] != 1)
        {
          
            $args["cat"] = $_GET['cat'];
            $page_cat = get_category( $_REQUEST['cat']);
            $parent_cat = get_category( $page_cat->parent);
             
        }
        
        $post = get_post($id);
        ?>

<script>
    $('html').addClass('alt');
</script>
        

<div id="classes">
    
    <h2 style="margin-bottom: .5em;">Weekly class schedule</h3>
    <?php echo do_shortcode('[wcs]'); ?>   
    <p style="font-size: .9em">Working hours for Private classes and Reiki treatments, please take a look at <a href="<?php echo get_permalink(34); ?>" title="QiBelly Office Hours" >QiBelly contact information</a> </p>
    
    <ul class="items">


<!--blog posts-->

<?php 
        query_posts( $args ); 

        

        if ( have_posts() ) : while ( have_posts() ) : the_post(); 

        $post_categories = wp_get_post_categories( get_the_ID() );
        
        $cat_slug_string = "";

        foreach($post_categories as $c){
            $cat = get_category( $c );
            $cat_slug_string .= $cat->slug." "; 
        }
?>
    
    <li data-filter="<?php echo $cat_slug_string;?>">
    	
    	<?php
        $day=get_post_meta(get_the_ID(), 'day', true);

        $time=get_post_meta(get_the_ID(), 'time', true);
        $price=get_post_meta(get_the_ID(), 'price', true);
        $locations_str=get_post_meta(get_the_ID(), 'class-locations', true);
        $locations = explode(",", str_replace(" ", "", $locations_str));
        $experience_level=get_post_meta(get_the_ID(), 'experience-level', true);
        $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
        
        ?>
		<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">
			<div class="desc">
				<?php the_title('<h3>','</h3>');?>
                <p><?php the_excerpt(); ?></p>
                
 			<?php
 				if ($post_categories) {
			?>
				<ul class="pills">
		            <?php
		            foreach($post_categories as $c){
		                $cat = get_category( $c );
		                ?>
	                <li><?php echo $cat->name." "; ?></li>
		            <?php
	                	$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug ); 
		            }
				?>
				</ul>
				<?php

				}
             ?>
				<span class="more">Read more</span>
			</div>
			<div class="details">
                        <?php 
                        foreach($locations as $location)
                        {
                            
                            
                            $location_post = get_posts( array( 'post_type' => 'location', 'name'=> $location));
                            $gmap_image_url=get_post_meta($location_post[0]->ID, 'gmap-image-url', true);                            
                            $location_address=get_post_meta($location_post[0]->ID, 'location-address', true);

                            if($gmap_image_url)
                            {
                        ?>
                            
<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $gmap_image_url; ?>&amp;zoom=14&amp;size=220x100&amp;sensor=false&amp;markers=<?php echo $gmap_image_url; ?>" class="gmap" alt="<?php echo $location_post[0]->post_title; ?>">
<?php
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
                 
                    </div>
                </a>
            </li>
        

    
<?php endwhile; ?>

</ul> 


    <div id="verticals">

        <div>
            <h3>Disciplines</h3>
            <p>A lot of our offerings are broken down into various dicsiplines of interest. Take a moment to browse through them below.</p>
            <ul>
            <?php
    //$W_Secondary_Nav = new Walker_Secondary_Nav();Post_Category_Walker    
    
        //Classes page show Categories
        $cat_args = array(
    //        'show_option_all'    => ,
    //        'orderby'            => 'name',
    //        'order'              => 'ASC',
    //        'style'              => 'list',
    //        'show_count'         => 0,
    //        'hide_empty'         => 1,
    //        'use_desc_for_title' => 1,
            'child_of'           => 10,
    //        'feed'               => ,
    //        'feed_type'          => ,
    //        'feed_image'         => ,
    //        'exclude'            => ,
    //        'exclude_tree'       => ,
    //        'include'            => ,
            'hierarchical'       => true,
            'title_li'           => __( '' ),
    //        'show_option_none'   => __('No categories'),
    //        'number'             => NULL,
    //        'echo'               => 1,
    //        'depth'              => 0,
    //        'current_category'   => 0,
    //        'pad_counts'         => 0,
    //        'taxonomy'           => 'category',
              'walker'             => $Post_Category_Walker 
         );

        ?>
<?php wp_list_categories($cat_args); ?>
            </ul>
        </div>     
        
        <div>
            <h3>Private Classes &amp;<br> Reiki Classes</h3>
            <p>In addition to scheduled group classes, QiBelly offers private classes at various locations as well as Master Training classes. For more information, please review below.</p>
            <p>
                <a href="/?cat=5" class="more" title="Private Classes">Private Classes</a>
                <a href="<?php echo get_permalink(599); ?>" class="more" title="<?php echo get_the_title(599); ?>"><?php echo get_the_title(599); ?></a>

<!--                <a href="/?cat=7" class="more">Master Training</a>-->
            </p>

<!--
            <ul>
        <?php
        $Post_Category_Walker = new Post_Category_Walker();
//Classes page show Categories
        $cat_args = array(
    //        'show_option_all'    => ,
    //        'orderby'            => 'name',
    //        'order'              => 'ASC',
    //        'style'              => 'list',
    //        'show_count'         => 0,
    //        'hide_empty'         => 1,
    //        'use_desc_for_title' => 1,
            'child_of'           => 3,
    //        'feed'               => ,
    //        'feed_type'          => ,
    //        'feed_image'         => ,
    //        'exclude'            => ,
    //        'exclude_tree'       => ,
    //        'include'            => ,
            'hierarchical'       => false,
            'title_li'           => __( '' ),
    //        'show_option_none'   => __('No categories'),
    //        'number'             => NULL,
    //        'echo'               => 1,
    //        'depth'              => 0,
    //        'current_category'   => 0,
    //        'pad_counts'         => 0,
    //        'taxonomy'           => 'category',
            'walker'             => $Post_Category_Walker 
         );
        ?>
        	<?php wp_list_categories($cat_args); ?>
    	   </ul>-->
    	</div>
    </div>   
            
<!--        <div id="class-descriptors">
		<div>
			<h3>Type <em>None Selected</em></h3>
		</div>
		<div>
			<h3>Discipline <em>None Selected</em></h3>
		</div>
	</div>-->
            <?php 
//		if($page_cat->category_description) {
//	?>
<!--<div class="cat-desc">-->
	<?php
//		    echo $page_cat->category_description;
//	?>
<!--</div>-->
	<?php
//		} 
//	?>
        </div>
<p><a href="#content" rel="top" class="more">Back to top</a></p>
</div>

<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<!--end to post-->
        
 			</section>
			
<?php // get_sidebar('right'); ?>

<?php get_footer(); ?>