<?php get_header(); ?>
<?php get_sidebar('left'); ?>
<section class="primary">
<h2>Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h2>
<?php 

//$id = (int)$_GET['post_id'];
//echo '<h2>'.get_the_title($id).'</h2>';
//$post = get_post($id);
//echo $post->post_content;
//echo '<pre>';
//print_r($post);
//echo '</pre>';
?>

<!--blog posts-->
<?php 

//$args = array( 'paged' => get_query_var('paged') , 'posts_per_page' => 1);
//query_posts( $args ); 

if ( have_posts() ){ ?>
				<div id="search-results">
					<ul class="items">
	<?php
	 while ( have_posts() ) : the_post(); 

    ?>
    					<li>
							<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">
								<div class="desc">
									<h3><?php echo get_the_title();//the_title('<h3>','</h3>');?></h3>
									
									<p class="deets">Paul Lara - <?php the_time('F j, Y'); ?></p>
									<p><?php echo get_the_excerpt(); ?> ...</p>
									<span class="more">Read more</span>
								</div>
							</a>
						</li>
    <?php
endwhile; ?> 
					</ul>
				</div>
<p><a href="#content" rel="top" class="more">Back to top</a></p>				
				<?php/*<div class="pagination">
                                   <ul class="pg-clean">
                                     wp_pagenavi(); 
                                    </ul>	
				</div>		*/?>
                                
<?php }else{
    
?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php } ?>
			</section>
			

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>