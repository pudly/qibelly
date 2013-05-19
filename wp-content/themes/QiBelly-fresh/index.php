<?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">

<?php
$id = (int)$_GET['post_id'];

echo '<h2>'.get_the_title($id).'</h2>';
$post = get_post($id);
echo '<p>'.$post->post_content.'</p>';
?>

			</section>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>