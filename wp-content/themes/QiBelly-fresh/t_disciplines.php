<?php
/*
Template Name: Discipline
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">

<?php
//get lineage link
global $wpdb;

$id = (int)$_GET['post_id'];

$input_category = get_category_by_slug( $post->post_name );

// var_dump($input_category);

$post = get_post($id);
echo '<h2>'.get_the_title($id).'</h2>';
$discipline_content =  $post->post_content;

$args = array( 'post_type'=> 'class', 'category_name'=>$input_category->name, 'posts_per_page' => '3');
?>

<h3>Classes at a glance</h3>
<ul class="items tiny">

    
<!--blog posts-->

<?php
        query_posts( $args );


        if ( have_posts() ) : while ( have_posts() ) : the_post();


?>

    <li>
		<a href="<?php echo get_category_link( $input_category->term_id ); ?>" title="<?php echo $input_category->slug;?>">
            <?php the_title('<h3>','</h3>');?>
        </a>
    </li>
<?php endwhile; ?>

</ul>

<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
<p style="overflow: hidden;">
<a class="more" href="<?php echo get_category_link( $input_category->term_id ); ?>" title="<?php echo $input_category->name; ?>">All <?php echo $input_category->name;?> classes</a>
</p>


<?php echo $discipline_content; ?>


<?php
/*
REMOVING BLOG RELATIONSHIP FOR NOW
 *
 *
 *
 *
//explode strin gand the replace with %
$querystr = "
    SELECT $wpdb->posts.*
    FROM $wpdb->posts
        LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
	LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
    WHERE $wpdb->posts.post_type = 'post'
        AND $wpdb->term_taxonomy.taxonomy = 'tag'
        AND $wpdb->term_taxonomy.name = $input_category->term_id
    ORDER BY $wpdb->posts.post_date DESC
 ";

$blog_posts = $wpdb->get_results($querystr, OBJECT);

if($blog_posts):?>

    <li>
        <a href="<?php echo get_bloginfo('wpurl');?>/?p=<?php echo $blog_posts[0]->post_name; ?>"><?php echo $blog_posts[0]->post_title; ?></a>

<?php endif; ?>

    </li>

    <?php
*/

$querystr = "
    SELECT $wpdb->posts.*
    FROM $wpdb->posts
        LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
	LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
    WHERE $wpdb->posts.post_type = 'lineage-training'
        AND $wpdb->term_taxonomy.taxonomy = 'category'
        AND $wpdb->term_taxonomy.term_id = $input_category->term_id
    ORDER BY $wpdb->posts.post_date DESC
 ";

 $lineage_posts = $wpdb->get_results($querystr, OBJECT);

//echo 'lineage_posts->post_type<pre>';
//print_r($lineage_posts);
//echo '</pre>';

//echo '$lineage_posts->post_name<pre>';
//print_r($lineage_posts[0]->post_name);
//echo '</pre>';
//echo '$lineage_posts->post_name<pre>';
//print_r($lineage_posts[0]->post_type);
//echo '</pre>';

if($lineage_posts[0]->post_title):

?>


        <p></p><a class="more" href="<?php echo get_permalink($lineage_posts[0]->ID);?>" title="<?php echo $lineage_posts[0]->post_title; ?>"><?php echo $lineage_posts[0]->post_title; ?></a></p>

<?php endif; ?>


</section>

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>