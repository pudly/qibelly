<?php
/*
Template Name: Discipline
*/
?>

<?php get_header(); ?>

    
<?php get_sidebar('left'); ?>


<div id="content">

<!-- default form -->
<!--title-->
<!--todo:remove h1 here-->
<h1>_</h1>

<?php  ?>


<?php 
//get title
?><!--make h2--><?php
$id = (int)$_GET['post_id'];


//echo '<pre>';
//print_r(get_category_by_slug( $post->post_name ));
//echo '</pre>';
$class_category = get_category_by_slug( $post->post_name );

$post = get_post($id);
echo '<h4>'.get_the_title($id).'</h4>';
?>
<ul>
    <li>
<a href="<?php echo get_bloginfo('wpurl');?>/?cat=<?php echo $class_category->term_id;?>"><?php echo $class_category->name;?> Classes</a></li>

<?php
//get lineage link
global $wpdb;

$querystr = "
    SELECT $wpdb->posts.* 
    FROM $wpdb->posts
        LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
	LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
    WHERE $wpdb->posts.post_type = 'lineage-training'
        AND $wpdb->term_taxonomy.taxonomy = 'category'
        AND $wpdb->term_taxonomy.term_id = $class_category->term_id
    ORDER BY $wpdb->posts.post_date DESC
 ";

 $lineage_posts = $wpdb->get_results($querystr, OBJECT);
 
//echo 'lineage_posts->post_type<pre>';
//print_r($lineage_posts);
//echo '</pre>';
//
//echo '$lineage_posts->post_name<pre>';
//print_r($lineage_posts[0]->post_name);
//echo '</pre>';
//echo '$lineage_posts->post_name<pre>';
//print_r($lineage_posts[0]->post_type);
//echo '</pre>';
?>

    <li><a href="<?php echo get_bloginfo('wpurl');?>/?<?php echo $lineage_posts[0]->post_type; ?>=<?php echo $lineage_posts[0]->post_name; ?>"><?php echo $lineage_posts[0]->post_title; ?></a>
</li>
</ul>

<?
echo $post->post_content;
//echo '<pre>';
//print_r($post);
//echo '</pre>';



?>

</div> <!-- end content -->

<?php get_sidebar('right'); ?>

<div id="clearboth"></div>
</div> <!-- end container -->

<?php get_footer(); ?>