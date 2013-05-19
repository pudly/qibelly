<?php
/*
Template Name: Classes
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

$args = array( 'post_type'=> 'class','posts_per_page'=>'200' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
            
    $post_categories = wp_get_post_categories( get_the_ID() );
$cats = array();

    
    ?>
<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>"><?php the_title('<h5>','</h5>');?></a>
<?php            
    //the_title('<h5 class="class">','</h5>');
    
    //$allKeys = get_post_custom_keys(get_the_ID());
    
    $day=get_post_meta(get_the_ID(), 'day', true);
    $time=get_post_meta(get_the_ID(), 'time', true);
    $price=get_post_meta(get_the_ID(), 'price', true);
    $location;
    $experience_level=get_post_meta(get_the_ID(), 'experience-level', true);
    ?>
    
    <?php // the_excerpt();
    the_content(); ?>
    
    
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
        <?php }?>
        
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

            ?>
                
         
    </dl>

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
<!--end class template-->

</div> <!-- end content -->

<?php get_sidebar('right'); ?>

<div id="clearboth"></div>
</div> <!-- end container -->

<?php get_footer(); ?>
