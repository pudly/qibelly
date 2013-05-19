<!-- left_menu form --> 
 
<div id="left_menu"> 
    <ul>
<?php 
        $args = array(
            'depth'        => 1,
            'show_date'    => '',
            'date_format'  => get_option('date_format'),
            'child_of'     => 0,
            'exclude'      => '221, 214, 219, 224, 226',
            'include'      => '',
            'title_li'     => __(''),
            'echo'         => 1,
            //'authors'      => '',
            //'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '',
            'walker'       => '',
            'post_type'    => 'page',
            'post_status'  => 'publish' 
    );
    
        wp_list_pages($args);
?>
        <li><h1>_</h1></li>
        
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
            //'authors'      => '',
            //'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '',
            'walker'       => '',
            'post_type'    => 'page',
            'post_status'  => 'publish' 
    );
    
        wp_list_pages($args);
?>
    </ul>
	<? /*<ul> 
	<li><a href="Reiki-.html" id="1_reiki_nav">Reiki</a></li> 
	<li><a href="Meditation-.html" id="2_meditation_nav">Meditation</a></li> 
	<li><a href="QiGong-Tai-Chi.html" id="3_qigong_nav">QiGong<span class="non-bold">/</span>Tai Chi</a></li> 
	<li><a href="Kung-Fu.html" id="4_chinese_martial_arts_nav">Kung Fu</a></li> 
	<!-- <li>&nbsp;</li> 
	<li class="small"><a href="#">Consultations for Individuals</a></li> 
	<li class="small"><a href="http://www.qibelly.com/Wellness">Wellness Programs for Groups</a></li> -->
	<li>&nbsp;</li> 
	<li class="small"><a href="News.html" id="5_news_nav">Recent Postings</a></li> 
	<li class="small"><a href="Wellness.html" id="7_testimonials_nav">Testimonials</a></li>
        <li>&nbsp;</li> 
</ul>*/ ?>

<div id="sub_menu">
	
    <!--<h5>About QiBelly</h5>
    <h5>_</h5>-->	
    <ul>

    <?php 
    
    $page_array = get_page($_GET['page_id']);
    //$parent_page_id = $page_array->post_parent;
    //echo $page_array->post_parent;
    //$parent_page_array = get_page($parent_page_id);
    $children = get_pages("child_of=$post_id");
    
//    echo '<pre>';
//    print_r($page_array);
//    echo '</pre>';
    
    //blog page show archives
    if($page_array->post_name == "classes" || $_GET['cat'] )//|| $par->post_name == "classes")
    {
    
        //Classes page show Categories
        $cat_args = array(
    //        'show_option_all'    => ,
    //        'orderby'            => 'name',
    //        'order'              => 'ASC',
    //        'style'              => 'list',
    //        'show_count'         => 0,
    //        'hide_empty'         => 1,
    //        'use_desc_for_title' => 1,
            'child_of'           => 3,
    //        'feed'               => ,
    //        'feed_type'          => ,
    //        'feed_image'         => ,
    //        'exclude'            => ,
    //        'exclude_tree'       => ,
    //        'include'            => ,
            'hierarchical'       => true,
            'title_li'           => __( '<h5>Class Types</h5>' ),
    //        'show_option_none'   => __('No categories'),
    //        'number'             => NULL,
    //        'echo'               => 1,
    //        'depth'              => 0,
    //        'current_category'   => 0,
    //        'pad_counts'         => 0,
    //        'taxonomy'           => 'category',
    //        'walker'             => $W_Secondary_Nav 
         );

        wp_list_categories($cat_args);
        
        //Classes page show Categories
        $cat_args = array(
    //        'show_option_all'    => ,
    //        'orderby'            => 'name',
    //        'order'              => 'ASC',
    //        'style'              => 'list',
    //        'show_count'         => 0,
    //        'hide_empty'         => 1,
    //        'use_desc_for_title' => 1,
            'child_of'           => 10,
    //        'feed'               => ,
    //        'feed_type'          => ,
    //        'feed_image'         => ,
    //        'exclude'            => ,
    //        'exclude_tree'       => ,
    //        'include'            => ,
            'hierarchical'       => true,
            'title_li'           => __( '<h5>Disciplines</h5>' ),
    //        'show_option_none'   => __('No categories'),
    //        'number'             => NULL,
    //        'echo'               => 1,
    //        'depth'              => 0,
    //        'current_category'   => 0,
    //        'pad_counts'         => 0,
    //        'taxonomy'           => 'category',
    //        'walker'             => $W_Secondary_Nav 
         );

        wp_list_categories($cat_args);
        
        
    }
    
    
    //blog page show archives
    else if($page_array->post_name == "blog" || $_GET['m'])
    {
        wp_get_archives(apply_filters('widget_archives_args', array('type' => 'monthly', 'show_post_count' => $c)));
    
    }
    
    
    
    else if((count( $children ) > 1 || $page_array->post_parent != 0 || !is_single()) && $page_array->post_name != "home")// && $page_array->post_name == "home")//$parent_page_array->post_name != "")//($parent_page_id != 0 && $parent_page_array->post_name != ""))
    {
                  //echo count( $children ) != 0;
        $child_of=$page_array->post_parent;

        //
        if($child_of == 0)
        {
            $child_of=$_GET['page_id'];  
        
        }
        // Call class:
    //include_once('/classes/My_Custom_Walker.class.php');
    $W_Secondary_Nav = new Walker_Secondary_Nav();


    $args = array(
        'depth'        => 1,
        'show_date'    => '',
        'date_format'  => get_option('date_format'),
        'child_of'     => $child_of,
        'exclude'      => '',
        'include'      => '',
        'title_li'     => __(''),
        'echo'         => 1,
        //'authors'      => '',
        //'sort_column'  => 'menu_order, post_title',
        'link_before'  => '',
        'link_after'   => '',
        'walker'       => $W_Secondary_Nav,
        'post_type'    => 'page',
        'post_status'  => 'publish' 
);

    
        wp_list_pages($args);
    }
    
    ?>
    </ul>
    
    
	
</div>


</div> <!-- end left_menu --> 