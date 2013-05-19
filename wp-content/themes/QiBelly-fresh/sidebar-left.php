<!-- left_menu form -->

    <?php wp_reset_query(); ?>



    <aside>

        <nav id="disciplines">

        <?php

            $args = array(

                'depth'        => 1,

                'show_date'    => '',

                'date_format'  => get_option('date_format'),

                'child_of'     => 0,

                'exclude'      => '',

                'include'      => '221, 214, 219, 224, 226',

                'title_li'     => __(''),

                'echo'         => 1,

                'link_before'  => '',

                'link_after'   => '',

                'walker'       => '',

                'post_type'    => 'page',

                'post_status'  => 'publish'

            );

        ?>

            <ul>

                <?php wp_list_pages($args);?>

            </ul>

        </nav>



        <nav id="contextual">



    <?php



        if(is_page('blog') || is_archive() || is_single()) {



		if($post->post_type == 'page' || $post->post_type == 'post') {?>



            <ul>

                <li class="pagenav">

                    <h3>Archives</h3>

                    <ul>
                        <?php wp_get_archives(apply_filters('widget_archives_args', array('before'=>'', 'after'=>'', 'type' => 'monthly', 'show_post_count' => 0, 'limit' => 5))); ?>
                    </ul>

                </li>

            </ul>
			<a href="<?php echo get_permalink( 548 ); ?>" class="more">Additional archives</a>

    <?php

		}

	}



        if(is_page(6) || $post->post_parent == 6)   {



          $children = get_pages('child_of='.$post->ID);

          $title = get_the_title($post->ID);

          $id = $post->ID;

          if(!$children && !empty($post->post_parent)) {

        		$children = get_pages('child_of='.$post->post_parent);

        		$title = get_the_title($post->post_parent);

        		$id = $post->post_parent;

        	}



        	if($children) {

            $args = array(

                'depth'        => 1,

                'show_date'    => '',

                'date_format'  => get_option('date_format'),

                'child_of'     => $id,

                'exclude'      => '',

                'include'      => '',

                'title_li'     => __("<h3>".$title."</h3>"),

                'echo'         => 0,

                //'authors'      => '',

                //'sort_column'  => 'menu_order, post_title',

                'link_before'  => '',

                'link_after'   => '',

                //'walker'       => $W_Secondary_Nav,

                'post_type'    => 'page',

                'post_status'  => 'publish'

            );

            echo '<ul>'.wp_list_pages($args).'</ul>';

          }

        }



        ?>

		</nav>

	</aside>