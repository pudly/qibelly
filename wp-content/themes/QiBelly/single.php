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
<!--todo:remove h1 here<h1>_heerre</h1>-->
<h1>_</h1>

<?php 
//get title
?><!--make h2--><?php
//$id = (int)$_GET['post_id'];
//echo '<h4>'.get_the_title($id).'</h4>';
//$post = get_post($id);
//echo $post->post_content;
//echo '<pre>';
//print_r($post);
//echo '</pre>';


?>

<!--blog posts-->
<?php 

//$args = array( 'post'=> 'post' );
//query_posts( $args ); 


if ( have_posts() ) : while ( have_posts() ) : the_post(); 

if($post->post_type == "post")
{
    ?><!--make h2-->
    
    <a href="<?php echo get_bloginfo('wpurl');?>/?page_id=32" title="return to blog list" >View all blogs</a>
    <br/><br/>
    <?php
}

    the_title('<h4>','</h4>');
    the_content(); 
    
    
    $day=get_post_meta(get_the_ID(), 'day', true);
    $time=get_post_meta(get_the_ID(), 'time', true);
    $price=get_post_meta(get_the_ID(), 'price', true);
    $location;
    $experience_level=get_post_meta(get_the_ID(), 'experience-level', true);
    ?>
    
    
    <dl>
                  
        <?php
        
        if($day)
        {
        ?> 
        <dt>When:</dt>
        <dd><?php echo $day." "; ?>
        <?php
        }
        
        if($time)
        {
        ?> 
        <?php echo $time; ?></dd>
        <br/>
        <?php
        }
        
        if($price)
        {
        ?> 
        <dt>Price:</dt>
        <dd><?php echo $price;?></dd>
        <br/>
        <?php
        }
        
        if($location)
        {
        ?> 
        <dt>Location:</dt>
        <dd>High Park<!--CREATE CUSTOM LOCATION RELATIONSHIP--></dd>
        <br/>
        <?php
        }
        
        if($experience_level)
        {
        ?>        
        <dt>Experience Level:</dt>
        <dd><?php echo $experience_level;//false if you want an array?></dd>
        <br/>
        <?php }
        
        if($post_categories){
            
        ?>
        
        <dt>Course Type:</dt>
        
            <?php
            
            //$post_categories = wp_get_post_categories( get_the_ID() );
            //$cats = array();
            
                foreach($post_categories as $c){
                    $cat = get_category( $c );
                    ?>
                    <dd><?php echo $cat->name." "; ?></dd>

                <?php

                    //	$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
    //                        echo '<pre>';
    //                        print_r($cat);
    //                        echo '</pre>';
                }
            }
            ?>
                
         
    </dl>
    <hr/>
    <?php
endwhile; else: 
    
?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
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