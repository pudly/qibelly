<!doctype html>
<!--[if lte IE 8 ]> 
	<html lang="en" class="no-js oldie"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> 
<!--<![endif]-->
	<head>		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="imagetoolbar" content="no">
						
		<meta name="Author" content="(c)2012 - QiBelly">
		
<?php
        wp_head();
?>
		
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/assets/img/favicon.ico">
		
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/assets/css/bp.css">
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/assets/css/screen.css" media="screen">
	
		<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/libs/modernizr-2.0.6.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php /*
        <script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
*/ ?>
	
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/assets/js/libs/selectivizr-1.0.2.min.js"></script>
	<![endif]-->	
	

	</head>
<?php
$page_class = $post->post_name;
if(is_single()){
    switch($post->post_type)
    {
        case "class": 
            $page_class = "classes";
            break;
        case "post": 
            $page_class = "blog";
            break;   
    }
}

if(is_archive())
{
    $page_class = "blog";
}

if(is_category())
{
    $page_class = "classes";
}

if($post->post_parent == 6){
      $page_class = "about";
}
?>

	<body class="<?php echo $page_class; ?>">
        <?php // echo '<pre>';print_r($post);echo '</pre>';?>
		<!-- Facebook garbage -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=220051994784318";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<header>
			<a href="/" title="QiBelly home page"><h1 id="logo">QiBelly</h1></a>
			<div>
			<nav>
				<ul>
<?php 
//activate pages:
//Home - p=4
//Classes - p=26
//contact us/locations - p=34
////blog p=32
//About - p=6


        $args = array(
            'depth'        => 1,
            'show_date'    => '',
            'date_format'  => get_option('date_format'),
            'child_of'     => 0,
            'exclude'      => '221, 214, 219, 224, 226, 333',
            'include'      => '4,26,34,32,6,1105',
            'title_li'     => __(''),
            'echo'         => 1,
            //'authors'      => '',
            'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '',
            'walker'       => '',
            'post_type'    => 'page',
            'post_status'  => 'publish' 
            );
    
            wp_list_pages($args);
?>
				</ul>
			</nav>
    		<?php get_search_form(); ?>
    		</div>
		</header>
		<div id="content" class="col3">
