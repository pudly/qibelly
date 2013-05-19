<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
<section class="primary">

<?php 

$id = (int)$_GET['post_id'];
echo '<h2>'.get_the_title($id).'</h2>';
$post = get_post($id);
echo $post->post_content;
?>

<!--blog posts-->
<?php 

$args = array( 'post_type'=> 'post' , 'paged' => get_query_var('paged') , 'posts_per_page' => 5);
query_posts( $args ); 

if ( have_posts() ){ ?>
				<div id="blogs">
					<ul class="items">
	<?php
	 while ( have_posts() ) : the_post(); 

    ?>
    					<li>
							<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">
								<div class="desc">
									<h3><?php echo get_the_title();//the_title('<h3>','</h3>');?></h3>
									<!--<img src="http://dummyimage.com/390x120" alt="placeholder" />-->
                                                                        <?php the_post_thumbnail('blog-list-size'); ?>
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
				<div class="pagination">
                                   <ul class="pg-clean">
                                    <?php wp_pagenavi(); ?>
                                    </ul>	
				</div>		
                                
<?php }else{
    
?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php } ?>
			</section>
			
			<?php /*<section class="secondary">
				<a href="" title="Learn more about Paul Lara"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/mugshot.png" alt="Paul Lara"></a>
				
				<ul class="social-info">
					<li class="phone current">
						<a href="" title="Phone number">Phone QiBelly</a>
						<div>
							(416) 877-4106
						</div>
					</li>
					<li class="email">
						<a href="" title="Email QiBelly">Email QiBelly</a>
						<div>
							
							pau<a href="http://www.google.com/recaptcha/mailhide/d?k=0157DR3b-kY-q16APPC5WOxw==&amp;c=whdtuG5RFqkxA0Jdvwe5F7-wlG6FSp3mx_rqsNfQZ1w=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\0750157DR3b-kY-q16APPC5WOxw\75\75\46c\75whdtuG5RFqkxA0Jdvwe5F7-wlG6FSp3mx_rqsNfQZ1w\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">...</a>@qibelly.com
						</div>
					</li>
					<li class="twitter">
						<a href="http://twitter.com/qibelly" title="Follow us on Twitter - @QiBelly">@QiBelly</a>
						<div>
							<a href="https://twitter.com/qibelly" class="twitter-follow-button" data-show-count="true">Follow @qibelly</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</li>
					<li class="facebook">
						<a href="http://facebook.com/qibelly" title="Find us on Facebook - QiBelly">QiBelly</a>
						<div>
							<div class="fb-like" data-href="http://www.facebook.com/QiBelly" data-send="false" data-width="180" data-show-faces="false" data-colorscheme="dark" data-font="arial"></div>
						</div>
					</li>
				</ul>
				
				<h4>Tags related to this article</h4>
				<ul class="tags">
					<!--<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>
					<li><a href="">Tag</a></li>-->
                                
                                
                                <?php
                                //blog page show tags in sidebar-right
                                    $tag_args = array(
                                //        'show_option_all'    => ,
                                //        'orderby'            => 'name',
                                //        'order'              => 'ASC',
                                //        'style'              => 'list',
                                        'show_count'         => 1,
                                //        'hide_empty'         => 1,
                                //        'use_desc_for_title' => 1,
                                //        'child_of'           => 10,
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
                                        'taxonomy'           => 'post_tag'
                                //        'walker'             => $W_Secondary_Nav 
                                    );

                                    wp_list_categories($tag_args);?>
                                </ul><?php */ ?>
<!-- Sign-up button 
<a href="Signup.html"><img src="<?php echo get_bloginfo('template_directory');?>/_graphics/sign-up-button.png" border="0"> </a>-->

			</section>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>