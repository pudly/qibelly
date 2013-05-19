<?php get_header(); ?>

<?php get_sidebar('left'); ?>

			<section class="primary">



	<?php

        $page_heading = get_the_title(26);

        //$post = get_post(26);

  $cat = get_category_by_path(get_query_var('category_name'),false);
  $current = $cat->cat_ID;
  $current_name = $cat->cat_name;

        $args = array( 'post_type'=> 'class', 'posts_per_page' => '-1', 'cat' => $current);


    //    echo $current;
     //   echo $current_name;


		if(is_category(1)) {
 //       if($_GET['cat'] != 1)

   //     {


            $args["cat"] = $current;

            $page_cat = get_category($current);

            $parent_cat = get_category( $page_cat->parent);

            $page_heading .= " - ".$page_cat->name;;



        }

        //echo "ggg";

        //query_posts( $args );

        ?>

        <h2><?php echo $page_heading; ?> </h2>







<div id="classes">

    <ul class="items">





<!--blog posts-->



<?php

        query_posts( $args );







        if ( have_posts() ) : while ( have_posts() ) : the_post();



        $post_categories = wp_get_post_categories( get_the_ID() );



        //$cat_slug_string_disc = "";

        //$cat_slug_string_type = "";



        $cat_slug_string = "";



        foreach($post_categories as $c){

            $cat = get_category( $c );

            $cat_slug_string .= $cat->slug." ";

//

        }

?>



    <li data-filter="<?php echo $cat_slug_string; /*?>" data-filterDiscipline="<?php echo $cat_slug_string_disc; ?>" data-filterType="<?php echo $cat_slug_string_type; */?>">



    	<?php

        //$allKeys = get_post_custom_keys(get_the_ID());



        $day=get_post_meta(get_the_ID(), 'day', true);

        //echo '<pre>';

        //print_r($day);

        //echo '</pre>';



        $time=get_post_meta(get_the_ID(), 'time', true);

        $price=get_post_meta(get_the_ID(), 'price', true);

        $locations_str=get_post_meta(get_the_ID(), 'class-locations', true);

        $locations = explode(",", str_replace(" ", "", $locations_str));

        $experience_level=get_post_meta(get_the_ID(), 'experience-level', true);

        $bodytag = str_replace("%body%", "black", "<body text='%body%'>");



        ?>

		<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title();?>">

			<div class="desc">

				<?php the_title('<h3>','</h3>');?>

                <p><?php the_excerpt(); ?></p>



                <!--<p><strong>dont need to do another loop here...?</strong></p>-->

 			<?php

 				if ($post_categories) {

			?>

<!-- 			<h4>Course type:</h4> -->

				<ul class="pills">

		            <?php

					//$cats = array();

		            foreach($post_categories as $c){

		                $cat = get_category( $c );

		                ?>

	                <li><?php echo $cat->name." "; ?></li>

		            <?php

	                	$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );

		            }

				?>

				</ul>

				<?php



				}

             ?>

				<span class="more">Read more</span>

			</div>

			<div class="details">

                        <?php

                        foreach($locations as $location)

                        {





                            $location_post = get_posts( array( 'post_type' => 'location', 'name'=> $location));

                            //echo '<pre>';

                            //print_r($location_post);



                            //echo $location_post[0]->ID;

                            $gmap_image_url=get_post_meta($location_post[0]->ID, 'gmap-image-url', true);

                            $location_address=get_post_meta($location_post[0]->ID, 'location-address', true);





                            if($gmap_image_url)

                            {

                        ?>





<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $gmap_image_url; ?>&amp;zoom=14&amp;size=220x100&amp;sensor=false&amp;markers=<?php echo $gmap_image_url; ?>" class="gmap" alt="<?php echo $location_post[0]->post_title; ?>">

<!--                <span><?php// echo $location_post[0]->post_title; ?></span>-->

                <?php //echo '</pre>';

                            }

                        }

                        ?>

            <?php if($price){ ?>

                <span class="price"><?php echo $price; ?></span>

            <?php } ?>



			<?php if($experience_level) { ?>

        		<span class="experience"><?php echo $experience_level;//false if you want an array?></span>

        	<?php } ?>

                <dl class="time">

                    <?php



                    if($day){

                    ?>

                        <dt><?php echo $day; ?></dt>

                    <?php

                    }



                    if($time){ ?>

                        <dd><?php echo $time; ?></dd>

                    <?php } ?>

                </dl>



        <?php



         /*

        if($day)

        {

        ?>

        <dt>When:</dt>

        <dd><?php echo $day; ?>

        <?php

        }



        if($time)

        {

        ?>

        <?php echo $time; ?></dd>

        <br/>

        <?php

        }





        if($location)

        {

        ?>

        <dt>Location:</dt>

        <dd><!--CREATE CUSTOM LOCATION RELATIONSHIP--></dd>

        <?php

        }*/



		?>



                    </div>

                </a>

            </li>







<?php endwhile; ?>



</ul>

    <p>
        <a href="<?php echo get_permalink(26); ?>" title="Return to blog list" class="more back">Return to Classes</a>
    </p>
    <p style="clear: left;">
        <a href="#content" rel="top" class="more">Back to top</a>
    </p>
    
</div>



<?php else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>



<!--end to post-->



 			</section>



<?php // get_sidebar('right'); ?>



<?php get_footer(); ?>