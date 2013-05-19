			<section class="secondary">

				<a href="<?php echo get_permalink(38);?>" title="Learn more about Paul Lara"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/mugshot.png" alt="Paul Lara"></a>



				<ul class="social-info">

					<li class="phone current">

						<a href="javascript: return false" title="Phone number">Phone QiBelly</a>

						<div>

							416-877-4106

						</div>

					</li>

					<li class="email">

						<a href="javascript: return false" title="Email QiBelly">Email QiBelly</a>

						<div>

							<a href="http://www.google.com/recaptcha/mailhide/d?k=0157DR3b-kY-q16APPC5WOxw==&amp;c=whdtuG5RFqkxA0Jdvwe5F7-wlG6FSp3mx_rqsNfQZ1w=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\0750157DR3b-kY-q16APPC5WOxw\75\75\46c\75whdtuG5RFqkxA0Jdvwe5F7-wlG6FSp3mx_rqsNfQZ1w\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">pau...@qibelly.com</a>

						</div>

					</li>

					<li class="twitter">

						<a href="http://twitter.com/qibelly" rel="external" title="Follow us on Twitter - @QiBelly">@QiBelly</a>

						<div>

							<a href="https://twitter.com/qibelly" class="twitter-follow-button" data-show-count="true">Follow @qibelly</a>

							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

						</div>

					</li>

					<li class="facebook">

						<a href="http://facebook.com/qibelly" rel="external" title="Find us on Facebook - QiBelly">QiBelly</a>

						<div>

							<div class="fb-like" data-href="http://www.facebook.com/QiBelly" data-send="false" data-width="180" data-show-faces="false" data-colorscheme="light" data-font="arial"></div>

						</div>

					</li>

				</ul>

<?php



	wp_reset_query();



    if(is_single() && $post->post_type == 'post') {

        $tag_title = "Tags related to this article";



        ?>



        <h4><?php echo $tag_title;?></h4>

        <ul class="tags">

                <?php

        $posttags = get_the_tags();

        if ($posttags) {

          foreach($posttags as $tag) {

            ?>

            <li><a href="<?php echo get_bloginfo("wpurl");?>?tag=<? echo $tag->slug ?>" title="View all posts under <?php echo $tag->name; ?>"> <?php echo $tag->name; ?> </a></li>

            <?php

            }

          }



          ?>

        </ul>

        <?php



    }



    if(is_page('blog') || is_archive()) {

	if($post->post_type == 'page' || $post->post_type == 'post') {

      $tag_title = "Tags related to these articles";

    ?>



            	<h4><?php echo $tag_title;?></h4>

				<ul class="tags">



                    <?php

                    //blog page show tags in sidebar-right

                        $tag_args = array(

                    //        'show_option_all'    => ,

                    //        'orderby'            => 'name',

                    //        'order'              => 'ASC',

                    //        'style'              => 'list',

                    //        'show_count'         => 1,

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

                </ul>

<?php

	}

    }





?>



			<ul class="ctas">

				<li><a href="<?php echo get_permalink(34); ?>" title="Book a class"><span>Book a Class</span></a></li>

				<li><a href="<?php echo get_permalink(360); ?>" title="Get a free class"><span>Free Class</span></a></li>

			</ul>

<!-- Sign-up button

<a href="Signup.html"><img src="<?php echo get_bloginfo('template_directory');?>/_graphics/sign-up-button.png" border="0"> </a>-->



			</section>