<?php
/*
Template Name: Contact Us
*/
?>
<?php
$qibellyEmail = "noreply@qibelly-test.com";
$testEmail = "bethes135@gmail.com";

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
            //print "Form passed!<br />";
            print "Thank you for contacting us. We will be get back to you as soon as possible!<br />";
            //var_dump($zForm);
		    //$attachments = array(WP_CONTENT_DIR . '/uploads/file_to_attach.zip');
	    
	    //send email to paul
	    $p_to = "paul@qibelly.com";
	    //$p_from = "contactus@qibelly.com";
	    $p_subject = "Contact QiBelly.com";
	    if($zForm["Subject"] != "")
	    {
		    $p_subject .= " - " . $zForm["Subject"];
	    }
	    
	    $p_message = "Email from <a href='mailto:" . $zForm["Email"] . "'>" .$zForm["Email"] . "</a><p>" . htmlspecialchars($zForm["Message"])."</p>";
	    
	    if($testEmail != "")
	    {
		    $p_to = $testEmail; 
		    $p_message .= "<br/><br/>THIS IS A TEST EMAIL.";
	    }
	    
	    
	    $headers = "From: Contact QiBelly $qibellyEmail" . "\r\n";
	    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	    wp_mail($p_to, $p_subject, $p_message, $headers);
	    remove_filter( 'wp_mail_content_type', 'set_html_content_type' ); // reset content-type to to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
	    
	    $autoR_message = "<p>Thank you for contacting QiBelly. Please allow 24 to 48 hours for a response. <br/>This is auto-responder, please do not reply to this email.</p>";
//	if($zForm["SignUp"] != "")
//	{
//		$autoR_message .= "<p>If you haven't had a chance yet, <a href='http://www.qibelly.com/free-class/' >sign up</a> for the QiBelly Newsletter and get a class for free.</p>";
//	}
	    $headers = 'From: Contact QiBelly <noreply@qibelly-test.com>' . "\r\n";
	    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	    wp_mail($zForm["Email"], "Contact QiBelly - Thank You", $autoR_message, $headers);
	    remove_filter( 'wp_mail_content_type', 'set_html_content_type' ); // reset content-type to to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
            exit;
        }
}


function set_html_content_type()
{
	return 'text/html';
}
?>	    
<form id="contact-us" method="POST" >
	<fieldset>
<legend>Contact Message</legend>
		<ol>
	<li><label for="param_name">Name</label>
	<input type="text" id="param_name" name="Form[Name]" data-validation='{"required":true, "message":"Please enter your name"}' placeholder="Name" size="20" /></li>
	
	<li>
	<label for="txt_subject">Subject</label>
	<input type="text" id="param_subject" name="Form[Subject]" data-validation='{"required":true, "message":"Please enter a subject"}' placeholder="Subject" size="20" /></li>
	<li>
	<label for="txt_email">Email</label>
	<input type="email" id="param_email" name="Form[Email]" data-validation='{"required":true, "message":"Please enter your email address"}' placeholder="xxxxx@xxxx.xxx" size="20" /></li>
	<li>
	<label for="txt_name">Message</label>
	<textarea id="param_message" rows="4" cols="50" name="Form[Message]" data-validation='{"required":true, "message":"Please enter a message"}' placeholder="message"></textarea></li>
	
<!--	<p>
	<label for="ckb_signup">Newsletter Sign Up</label><br/>
	<input type="checkbox" id="ckb_signup" name="Form[SignUp]" /></p>-->
	
	<li><button id="btn_submit" value="Subscribe" type="submit">Submit</button></li>
	</ol>
	</fieldset>
</form>

            </section>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>