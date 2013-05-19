 		</div>
		<footer>
			<nav>
				<ul>
<!--	                <li><h5>Sitemap</h5></li>-->
                                        <?php
        $args = array(
            'depth'        => 0,
            'show_date'    => '',
            'date_format'  => get_option('date_format'),
            'child_of'     => 0,
            'exclude'      => '4, 221, 214, 219, 224, 226, 333, 360, 548',
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
				</ul>



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
    );?>
                                <ul>

<!--                                    <li><h5>Disciplines</h5></li>-->
                                    <?php wp_list_pages($args);?>
                                </ul>
                            <ul>
<!--                                <li><h5>Miscellaneous</h5></li>-->
                                <li><a href="<?php echo get_permalink(360);?>" title="Free class" >Free class</a></li>
                                <li><a href="<?php echo get_permalink(34);?>" title="Book a class" >Book a class</a></li>
                                <li><a href="<?php echo get_category_link( 6 ); ?>" title="Corporate Workshops" >Corporate Workshops</a></li>
<!--                                <li><a href="#" title="Collaborating" >Collaborating</a></li>
                                <li><a href="#" title="Resources" >Resources</a></li>-->
                                <li><a href="<?php echo get_permalink(333);?>" title="QiBelly Network" >QiBelly Network</a></li>
                                <li><a href="<?php echo get_permalink(34);?>" title="Feedback" >Feedback</a></li>


                            </ul>

			</nav>
			<p>Copyright &copy; <?php echo date('Y'); ?> QiBelly - All rights reserved.</p>
		</footer>

		<!-- scripts -->


		<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/plugins.js"></script>
		<script src="<?php echo get_bloginfo('template_directory');?>/assets/js/script.js"></script>

 	<script>
			var _gaq=[['_setAccount','UA-11820147-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script> 

		<!-- Envoke Tracking Starts-->
		<script type="text/javascript">
		document.write(unescape("%3Cscript src='" + document.location.protocol + "//www.bettermail.ca/web_files/751/nvk_tracking/qib_website_nvk_tracking.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<!-- Envoke Tracking Ends-->
	</body>
</html>