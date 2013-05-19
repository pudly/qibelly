<?php
/*
Template Name: Archives
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
$post = get_post($id);
echo $post->post_content;
//echo '<pre>';
//print_r($post);
//echo '</pre>';

?>
        
        
<!--blog posts-->

<ul><?php wp_get_archives(apply_filters('widget_archives_args', array('before'=>'', 'after'=>'', 'type' => 'monthly', 'show_post_count' => 0))); ?></ul>

<!--end to post-->
        
			</section>
			
<?php get_sidebar('right'); ?>

<?php get_footer(); ?>