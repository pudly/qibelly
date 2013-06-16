<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
<?php get_sidebar('left'); ?>
            <section class="primary">

                            <?php echo '<h2>'.get_the_title($id).'</h2>';?>
                            
                            <ul class="items" id="locations">
<?php 

$args = array( 'post_type'=> 'location' );
query_posts( $args ); 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>
<li>
    <div class="desc">
    <?php
    the_title('<h3>','</h3>');
    
    //$allKeys = get_post_custom_keys(get_the_ID());
    $location_address=get_post_meta(get_the_ID(), 'location-address', true);
    $gmap_image_url=get_post_meta(get_the_ID(), 'gmap-image-url', true);   
    ?>
    <a href="https://maps.google.com/maps?q=<?php echo $gmap_image_url; ?>" rel="external">
        <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $gmap_image_url; ?>&amp;zoom=14&amp;size=200x100&amp;sensor=false&amp;markers=<?php echo $gmap_image_url; ?>" class="gmap" alt="<?php echo $location_post[0]->post_title; ?>">
    </a>
    <?php
    
        if($location_address)
        {
        ?>        
            <p><?php echo $location_address;?></p>
        <?php }?>
        

    <?php the_content(); ?>
    </div>
</li>
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
                </ul>
                            
                         
<?php
wp_reset_query();   
$id = (int)$_GET['post_id'];


$post = get_post($id);
echo $post->post_content;

//echo '<pre>';
//print_r($post);
//echo '</pre>';
//ECHO "HRRO";
?>
	<?php 
if (isset($_POST["Form"]))
{
	import_request_variables("p", "z");
	$missingfields = array();
        $required = array("Name"=>"Name", "Email"=>"Email", "Message"=>"Message");	
	
        while (list($var, $val) = each($required)) {
            if (isset($zForm[$var]) && $zForm[$var] != '') {
                // check this value further here
            } else {
                $missingfields[$var] = $val;
            }
        }
	
	
        if (count($missingfields)) {
            print "You missed out one or more fields:<br />";

            while(list($var, $val) = each($missingfields)) {
                print $val . "<br />";
            }
        } else {
            print "Form passed!<br />";
            var_dump($zForm);
		    //$attachments = array(WP_CONTENT_DIR . '/uploads/file_to_attach.zip');
	   $headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	   wp_mail('bethes135@gmail.com', 'subject', 'message', $headers);
	    
            exit;
        }
	
	
}
?>	    
<form id="contact-us" method="POST" >
	
	<p><label for="txt_name">Name</label><br/>
	<input type="text" id="txt_name" name="Form[Name]" /></p>
	
	<p>
	<label for="txt_email">Email</label><br/>
	<input type="text" id="txt_email" name="Form[Email]" /></p>
	
	<p>
	<label for="txt_name">Message</label><br/>
	<textarea id="txt_message" rows="4" cols="50" name="Form[Message]"></textarea></p>
	
	<input type="submit" id="btn_submit" text="Click" />
</form>

            </section>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>