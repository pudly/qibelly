<?php
/*
Template Name: Free Class
*/
?>
    <?php get_header(); ?>
<?php get_sidebar('left'); ?>
			<section class="primary">

<?php
//$id = (int)$_GET['post_id'];
//
//echo '<h2>'.get_the_title($id).'</h2>';
//$post = get_post($id);
//echo '<p>'.$post->post_content.'</p>';
?>
Sign up for the QiBelly Newsletter and get a FREE Class!!

<form id="free-class" action="http://www.bettermail.ca/bm/form.php" method="post" class="validajte">
<fieldset><legend>Contact information</legend><input type="hidden" name="successurl" value="http://www.qibelly.com/" />
<input type="hidden" name="cid" value="751" />
<input type="hidden" name="source" value="26459" />
<input type="hidden" name="sub[]" value="2240" />
<input type="hidden" name="bm_form_id" value="377" />
<input type="hidden" name="interest[]" value="16164" /><!-- newsletter -->
<ol>
	<li><label for="param_nametext">Name</label>
<input id="param_nametext" type="text" name="fname" value="" maxlength="35"  data-validation='{"required":true, "message":"Please enter"}' placeholder="Name" size="20"  /></li>
	<li><label for="param_emailtext">Email Address</label>
<input id="param_emailtext" type="email" name="email" value="" maxlength="35"  data-validation='{"required":true, "message":"Please enter"}' placeholder="xxxxx@xxxx.xxx" size="20" />
    </li>
	<li><label for="param_interest">Choose</label> 
        <select id="param_interest" name="interest[]" data-validation='{"required":true}' > 
            <option value="16592">General Contact</option> 
            <option value="16593">Free Reiki Share</option> 
            <option value="16595">Free QiGong / Tai Chi class</option> 
        </select></li>
	<li><label for="param_comments">Comments</label>
<textarea id="param_comments" rows="4" cols="50" name="comments" data-validation='{"required":true, "message":"Please enter"}' placeholder="message"></textarea></li>
	<li><button id="submitbutton" value="Submit" type="submit">Sign me up!</button></li>
</ol>
</fieldset>
</form><!-- Envoke Tracking Starts-->

<script type="text/javascript">// <![CDATA[


document.write(unescape("%3Cscript src='" + document.location.protocol + "//www.bettermail.ca/web_files/751/nvk_tracking/qib_website_nvk_tracking.js' type='text/javascript'%3E%3C/script%3E"));

// ]]></script>

<!-- Envoke Tracking Ends-->

<script type="text/javascript">
</script>
			</section>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>