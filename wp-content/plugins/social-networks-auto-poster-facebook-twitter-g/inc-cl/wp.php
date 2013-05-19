<?php    
//## NextScripts Facebook Connection Class
$nxs_snapAvNts[] = array('code'=>'WP', 'lcode'=>'wp', 'name'=>'WP Based Blog');

if (!class_exists("nxs_snapClassWP")) { class nxs_snapClassWP {
  //#### Show Common Settings
  function showGenNTSettings($ntOpts){ global $nxs_snapThisPageUrl, $nxs_plurl, $nxsOne; $code = 'WP'; $lcode = 'wp'; wp_nonce_field( 'ns'.$code, 'ns'.$code.'_wpnonce' ); ?> 
    <hr/><div class="nsx_iconedTitle" style="background-image: url(<?php echo $nxs_plurl; ?>img/<?php echo $lcode; ?>16.png);">Wordpress Compatible Blog Settings:           
            <?php $cgpo = count($ntOpts); $mgpo = 1+max(array_keys($ntOpts)); $nxsOne .= "&g=1"; ?>            
              <div class="nsBigText">You have <?php echo $cgpo=='0'?'No':$cgpo; ?> Blog account<?php if ($cgpo!=1){ ?>s<?php } ?>  </div></div> 
              <?php  //if (function_exists('nxs_doSMAS1')) nxs_doSMAS1($this, $mgpo); else nxs_doSMAS('Google+', 'GP'.$mgpo); ?>
              <?php foreach ($ntOpts as $indx=>$gpo){ if (trim($gpo['nName']=='')) $gpo['nName'] = str_ireplace('/xmlrpc.php','', str_ireplace('http://','', str_ireplace('https://','', $gpo['wpURL']))); ?>
                <p style="margin: 0px; margin-left: 5px;">
                  <input value="1" id="apDoWP" name="wp[<?php echo $indx; ?>][apDoWP]"type="checkbox" <?php if ((int)$gpo['doWP'] == 1) echo "checked"; ?> /> 
                  <strong>Auto-publish your Posts to your Blog <i style="color: #005800;"><?php if($gpo['nName']!='') echo "(".$gpo['nName'].")"; ?></i></strong> 
                  &nbsp;&nbsp;<a id="doWP<?php echo $indx; ?>A" href="#" onclick="doShowHideBlocks2('WP<?php echo $indx; ?>');return false;">[Show Settings]</a> &nbsp;&nbsp;
                  <a href="#" onclick="doDelAcct('wp','<?php echo $indx; ?>', '<?php echo $gpo['wpUName']; ?>');return false;">[Remove Account]</a>
                </p>            
                <?php $this->showNTSettings($indx, $gpo);             
              } ?>            
            <?php 
  }  
  //#### Show NEW Settings Page
  function showNewNTSettings($mgpo){ $gpo = array('nName'=>'', 'doWP'=>'1', 'wpUName'=>'', 'wpPageID'=>'', 'wpAttch'=>'', 'wpPass'=>'', 'wpURL'=>''); $this->showNTSettings($mgpo, $gpo, true);}
  //#### Show Unit  Settings
  function showNTSettings($ii, $gpo, $isNew=false){ global $nxs_plurl; ?>
            <div id="doWP<?php echo $ii; ?>Div" <?php if ($isNew){ ?>class="clNewNTSets"<?php } ?> style="max-width: 1000px; background-color: #EBF4FB; background-image: url(<?php echo $nxs_plurl; ?>img/wp-bg.png);  background-position:90% 10%; background-repeat: no-repeat; margin: 10px; border: 1px solid #808080; padding: 10px; display:none;">     <input type="hidden" name="apDoSWP<?php echo $ii; ?>" value="0" id="apDoSWP<?php echo $ii; ?>" />
            
            <div class="nsx_iconedTitle" style="float: right; background-image: url(<?php echo $nxs_plurl; ?>img/wp16.png);"><a style="font-size: 12px;" target="_blank"  href="http://www.nextscripts.com/setup-installation-wp-based-social-networks-auto-poster-wordpress/">Detailed Wordpress Blog Installation/Configuration Instructions</a></div>
            
            <?php if ($isNew){ ?> <br/>You can setup any Wordpress based blog with activated XML-RPC support (WP Admin->Settimgs->Writing->Remote Publishing->Check XML-RPC). Wordpress.com and Blog.com supported as well.<br/><br/> <?php } ?> 
            
            <div style="width:100%;"><strong>Account Nickname:</strong> <i>Just so you can easely identify it</i> </div><input name="wp[<?php echo $ii; ?>][nName]" id="wpnName<?php echo $ii; ?>" style="font-weight: bold; color: #005800; border: 1px solid #ACACAC; width: 40%;" value="<?php _e(apply_filters('format_to_edit',$gpo['nName']), 'NS_SNAutoPoster') ?>" /><br/><br/>
            
            <div style="width:100%;"><strong>XMLRPC URL:</strong> </div><input name="wp[<?php echo $ii; ?>][apWPURL]" id="apWPURL" style="width: 50%;" value="<?php _e(apply_filters('format_to_edit',$gpo['wpURL']), 'NS_SNAutoPoster') ?>" />
            <p style="font-size: 11px; margin: 0px;">Usually its a URL of your Wordpress installation with /xmlrpc.php at the end.<br/> Please use <b style="color: #005800;">http://YourUserName.wordpress.com/xmlrpc.php</b> (replace YourUserName with your user name - for example <i style="color: #005800;">http://nextscripts.wordpress.com/xmlrpc.php</i>) for Wordpress.com blogs. <br/> Please  use <b style="color: #005800;">http://YourUserName.blog.com/xmlrpc.php</b> (replace YourUserName with your user name - for example <i style="color: #005800;">http://nextscripts.blog.com/xmlrpc.php</i> for Blog.com blogs</p>
            
            <div style="width:100%;"><br/><strong>Blog Username:</strong> </div><input name="wp[<?php echo $ii; ?>][apWPUName]" id="apWPUName" style="width: 30%;" value="<?php _e(apply_filters('format_to_edit',$gpo['wpUName']), 'NS_SNAutoPoster') ?>" />                
            <div style="width:100%;"><strong>Blog Password:</strong> </div><input name="wp[<?php echo $ii; ?>][apWPPass]" id="apWPPass" type="password" style="width: 30%;" value="<?php _e(apply_filters('format_to_edit', substr($gpo['wpPass'], 0, 5)=='n5g9a'?nsx_doDecode(substr($gpo['wpPass'], 5)):$gpo['wpPass']), 'NS_SNAutoPoster') ?>" />  <br/>                
            
            <?php if ($isNew) { ?> <input type="hidden" name="wp[<?php echo $ii; ?>][apDoWP]" value="1" id="apDoNewWP<?php echo $ii; ?>" /> <?php } ?>
            
            <br/><strong id="altFormatText">Post Title and Post Text Formats</strong> 
              <p style="font-size: 11px; margin: 0px;">%SITENAME% - Inserts the Your Blog/Site Name. &nbsp; %TITLE% - Inserts the Title of your post. &nbsp; %URL% - Inserts the URL of your post. &nbsp; %TEXT% - Inserts the excerpt of your post. &nbsp;  %FULLTEXT% - Inserts the body(text) of your post, %AUTHORNAME% - Inserts the author's name.</p>            
            <div id="altFormat" style="">
              <div style="width:100%;"><strong id="altFormatText">Post Title Format</strong>               
              </div><input name="wp[<?php echo $ii; ?>][apWPMsgTFrmt]" id="apWPMsgTFrmt" style="width: 50%;" value="<?php if ($isNew) echo "%TITLE%"; else _e(apply_filters('format_to_edit',$gpo['wpMsgTFormat']), 'NS_SNAutoPoster'); ?>" />
            </div>            
            <div id="altFormat" style="">
              <div style="width:100%;"><strong id="altFormatText">Post Text Format</strong>               
              </div><input name="wp[<?php echo $ii; ?>][apWPMsgFrmt]" id="apWPMsgFrmt" style="width: 50%;" value="<?php if ($isNew) echo "%TEXT%"; else _e(apply_filters('format_to_edit',$gpo['wpMsgFormat']), 'NS_SNAutoPoster'); ?>" />
            </div><br/>    
            
            <?php if ($gpo['wpPass']!='') { ?>
            <?php wp_nonce_field( 'rePostToWP', 'rePostToWP_wpnonce' ); ?>
            <b>Test your settings:</b>&nbsp;&nbsp;&nbsp; <a href="#" class="NXSButton" onclick="testPost('WP', '<?php echo $ii; ?>'); return false;">Submit Test Post to WP Blog</a>      
               
            <?php } 
            
            ?><div class="submit"><input type="submit" class="button-primary" name="update_NS_SNAutoPoster_settings" value="<?php _e('Update Settings', 'NS_SNAutoPoster') ?>" /></div></div><?php
  }
  //#### Set Unit Settings from POST
  function setNTSettings($post, $options){ global $nxs_snapThisPageUrl; $code = 'WP'; $lcode = 'wp'; 
    foreach ($post as $ii => $pval){ 
      if (isset($pval['apWPUName']) && $pval['apWPUName']!=''){ if (!isset($options[$ii])) $options[$ii] = array();
        if (isset($pval['apWPURL']))   $options[$ii]['wpURL'] = trim($pval['apWPURL']);
        if (isset($pval['nName']))          $options[$ii]['nName'] = trim($pval['nName']);
        if (isset($pval['apWPUName']))   $options[$ii]['wpUName'] = trim($pval['apWPUName']);
        if (isset($pval['apWPPass']))    $options[$ii]['wpPass'] = 'n5g9a'.nsx_doEncode($pval['apWPPass']); else $options[$ii]['wpPass'] = '';  
        if (isset($pval['apWPMsgFrmt'])) $options[$ii]['wpMsgFormat'] = trim($pval['apWPMsgFrmt']);                                                  
        if (isset($pval['apWPMsgTFrmt'])) $options[$ii]['wpMsgTFormat'] = trim($pval['apWPMsgTFrmt']);                                                  
        if (isset($pval['apDoWP']))      $options[$ii]['doWP'] = $pval['apDoWP']; else $options[$ii]['doWP'] = 0; 
      }
    } return $options;
  }  
  //#### Show Post->Edit Meta Box Settings
  function showEdPostNTSettings($ntOpts, $post){ global $nxs_plurl; $post_id = $post->ID;
     foreach($ntOpts as $ii=>$ntOpt)  { $pMeta = maybe_unserialize(get_post_meta($post_id, 'snapWP', true));  if (is_array($pMeta)) $ntOpt = $this->adjMetaOpt($ntOpt, $pMeta[$ii]); $doWP = $ntOpt['doWP'];   
        $isAvailWP =  $ntOpt['wpUName']!='' && $ntOpt['wpPass']!=''; $wpMsgFormat = $ntOpt['wpMsgFormat']; $wpMsgTFormat = $ntOpt['wpMsgTFormat'];      
      ?>  
      <tr><th style="text-align:left;" colspan="2">
      <?php if ($isAvailWP) { ?><input class="nxsGrpDoChb" value="1" <?php if ($post->post_status == "publish") echo 'disabled="disabled"';?> type="checkbox" name="wp[<?php echo $ii; ?>][SNAPincludeWP]" <?php if (($post->post_status == "publish" && $ntOpt['isPosted'] == '1') || ($post->post_status != "publish" && ((int)$doWP == 1)) ) echo 'checked="checked" title="def"';  ?> /> <?php } ?>
      <div class="nsx_iconedTitle" style="display: inline; font-size: 13px; background-image: url(<?php echo $nxs_plurl; ?>img/wp16.png);">WP Blog - publish to (<i style="color: #005800;"><?php echo $ntOpt['nName']; ?></i>)</div></th> <td><?php //## Only show RePost button if the post is "published"
                    if ($post->post_status == "publish" && $isAvailWP) { ?><input alt="<?php echo $ii; ?>" style="float: right;" type="button" class="button" name="rePostToWP_repostButton" id="rePostToWP_button" value="<?php _e('Repost to WP Blog', 're-post') ?>" />
                    <?php wp_nonce_field( 'rePostToWP', 'rePostToWP_wpnonce' ); } ?>
                </td></tr>                
                
                <?php if (!$isAvailWP) { ?><tr><th scope="row" style="text-align:right; width:150px; padding-top: 5px; padding-right:10px;"></th> <td><b>Setup your WP Blog Account to AutoPost to WP Blogs</b>
                <?php } elseif ($post->post_status != "publish") { ?> 
                                
                <tr id="altFormat1" style=""><th scope="row" style="text-align:right; width:80px; padding-right:10px;"><?php _e('Title Format:', 'NS_SPAP') ?></th>
                <td><input value="<?php echo $wpMsgTFormat ?>" type="text" name="wp[<?php echo $ii; ?>][SNAPformatT]" size="60px" onfocus="jQuery('.nxs_FRMTHint').hide();mxs_showFrmtInfo('apWPTMsgFrmt<?php echo $ii; ?>');"/><?php nxs_doShowHint("apWPTMsgFrmt".$ii); ?></td></tr>
                
                <tr id="altFormat1" style=""><th scope="row" style="text-align:right; width:80px; padding-right:10px;"><?php _e('Text Format:', 'NS_SPAP') ?></th>
                <td><input value="<?php echo $wpMsgFormat ?>" type="text" name="wp[<?php echo $ii; ?>][SNAPformat]" size="60px" onfocus="jQuery('.nxs_FRMTHint').hide();mxs_showFrmtInfo('apWPMsgFrmt<?php echo $ii; ?>');"/><?php nxs_doShowHint("apWPMsgFrmt".$ii); ?></td></tr>
  
  <?php } 
     }
  }
  //#### Save Meta Tags to the Post
  function adjMetaOpt($optMt, $pMeta){ if (!isset($pMeta['isPosted'])) $pMeta['isPosted'] = '';
     $optMt['wpMsgFormat'] = $pMeta['SNAPformat']; $optMt['isPosted'] = $pMeta['isPosted']; $optMt['wpMsgTFormat'] = $pMeta['SNAPformatT'];  $optMt['doWP'] = $pMeta['SNAPincludeWP'] == 1?1:0; return $optMt;
  }  
}}
if (!function_exists("nxs_rePostToWP_ajax")) {
  function nxs_rePostToWP_ajax() { check_ajax_referer('rePostToWP');  $postID = $_POST['id']; $options = get_option('NS_SNAutoPoster');  
    foreach ($options['wp'] as $ii=>$two) if ($ii==$_POST['nid']) {   $two['ii'] = $ii;  //if ($two['gpPageID'].$two['gpUName']==$_POST['nid']) {  
      $gppo =  get_post_meta($postID, 'snapWP', true); $gppo =  maybe_unserialize($gppo);// prr($gppo);
      if (is_array($gppo) && isset($gppo[$ii]) && is_array($gppo[$ii])){ 
        $two['wpMsgFormat'] = $gppo[$ii]['SNAPformat']; $two['wpMsgTFormat'] = $gppo[$ii]['SNAPformatT']; 
      }
      $result = nxs_doPublishToWP($postID, $two); if ($result == 200) die("Successfully sent your post to WP Blog."); else die($result);        
    }    
  }
}  

if (!function_exists("nxs_doPublishToWP")) { //## Second Function to Post to WP
  function nxs_doPublishToWP($postID, $options){ if ($postID=='0') echo "Testing ... <br/><br/>";  
      //## Format
      $msgFormat = $options['wpMsgFormat'];    $msg = nsFormatMessage($msgFormat, $postID); 
      $msgTFormat = $options['wpMsgTFormat'];  $msgT = nsFormatMessage($msgTFormat, $postID);      
      
      if (function_exists("get_post_thumbnail_id") ){ $src = wp_get_attachment_image_src(get_post_thumbnail_id($postID), 'thumbnail'); $src = $src[0];}      
      $email = $options['wpUName'];  $pass = substr($options['wpPass'], 0, 5)=='n5g9a'?nsx_doDecode(substr($options['wpPass'], 5)):$options['wpPass'];      
      if ($postID=='0') { $link = home_url(); $msgT = 'Test Link from '.$link; } else { $link = get_permalink($postID); $img = $src; }      
      $dusername = $options['wpUName'];  $link = urlencode($link); $desc = urlencode(substr($msgT, 0, 250)); $ext = urlencode(substr($msg, 0, 1000));
      $t = wp_get_post_tags($postID); $tggs = array(); foreach ($t as $tagA) {$tggs[] = $tagA->name;} $tags = implode(',',$tggs);      
      $postCats = wp_get_post_categories($postID); $cats = array();  foreach($postCats as $c){ $cat = get_category($c); $cats[] = str_ireplace('&','&amp;',$cat->name); } // $cats = implode(',',$catsA);

      //## Post   
      require_once ('apis/xmlrpc-client.php'); $nxsToWPclient = new NXS_XMLRPC_Client($options['wpURL']); $nxsToWPclient->debug = false;
      if ($src!=='' && stripos($src, 'http')!==false) {      
        $handle = fopen($src, "rb"); $filedata = ''; while (!feof($handle)) {$filedata .= fread($handle, 8192);} fclose($handle);
        $data = array('name'  => 'image-'.$postID.'.jpg', 'type'  => 'image/jpg', 'bits'  => new NXS_XMLRPC_Base64($filedata), true); 
        $status = $nxsToWPclient->query('metaWeblog.newMediaObject', $postID, $options['wpUName'], $pass, $data);  $imgResp = $nxsToWPclient->getResponse();  $gid = $imgResp['id'];
      } else $gid = '';
      
      $params = array(0, $options['wpUName'], $pass, array('software_version'));
      if (!$nxsToWPclient->query('wp.getOptions', $params)) { $ret = 'Something went wrong - '.$nxsToWPclient->getErrorCode().' : '.$nxsToWPclient->getErrorMessage();} else $ret = 'OK';
      $rwpOpt = $nxsToWPclient->getResponse(); $rwpOpt = $rwpOpt['software_version']['value']; $rwpOpt = floatval($rwpOpt); //prr($rwpOpt);
      
      $extInfo = ' | PostID: '.$postID." - ".$post->post_title; $logNT = '<span style="color:#1A9EE6">WP</span> - '.$options['nName'];
      
      if ($rwpOpt==0)  $ret = 'XMLRPC is not found or not active. WP admin - Settings - Writing - Enable XML-RPC'; 
      else if ($rwpOpt<3.0)  $ret = 'XMLRPC is too OLD - '.$rwpOpt.' You need at least 3.0'; else {
       
        if ($rwpOpt>3.3){
          $nxsToWPContent = array('title'=>$msgT, 'description'=>$msg, 'post_status'=>'draft', 'mt_allow_comments'=>1, 'mt_allow_pings'=>1, 'post_type'=>'post', 'mt_keywords'=>$tags, 'categories'=>($cats), 'custom_fields' =>  $customfields);
          $params = array(0, $options['wpUName'], $pass, $nxsToWPContent, true);
          if (!$nxsToWPclient->query('metaWeblog.newPost', $params)) { $ret = 'Something went wrong - '.$nxsToWPclient->getErrorCode().' : '.$nxsToWPclient->getErrorMessage();} else $ret = 'OK';
          $pid = $nxsToWPclient->getResponse();  
      
          if ($gid!='') {      
            $nxsToWPContent = array('post_thumbnail'=>$gid);  $params = array(0, $options['wpUName'], $pass, $pid, $nxsToWPContent, true);      
            if (!$nxsToWPclient->query('wp.editPost', $params)) { $ret = 'Something went wrong - '.$nxsToWPclient->getErrorCode().' : '.$nxsToWPclient->getErrorMessage();} else $ret = 'OK';
          }
          $nxsToWPContent = array('post_status'=>'publish');  $params = array(0, $options['wpUName'], $pass, $pid, $nxsToWPContent, true);      
          if (!$nxsToWPclient->query('wp.editPost', $params)) { $ret = 'Something went wrong - '.$nxsToWPclient->getErrorCode().' : '.$nxsToWPclient->getErrorMessage();} else $ret = 'OK';
        } else {
          $nxsToWPContent = array('title'=>$msgT, 'description'=>$msg, 'post_status'=>'publish', 'mt_allow_comments'=>1, 'mt_allow_pings'=>1, 'post_type'=>'post', 'mt_keywords'=>$tags, 'categories'=>($cats), 'custom_fields' =>  $customfields);
          $params = array(0, $options['wpUName'], $pass, $nxsToWPContent, true);
          if (!$nxsToWPclient->query('metaWeblog.newPost', $params)) { $ret = 'Something went wrong - '.$nxsToWPclient->getErrorCode().' : '.$nxsToWPclient->getErrorMessage();} else $ret = 'OK';
          $pid = $nxsToWPclient->getResponse();  
        }
      } if ($ret!='OK') { if ($postID=='0') echo $ret; 
        nxs_addToLog($logNT, 'E', '-=ERROR=- '.print_r($ret, true), $extInfo);
      } else { if ($postID=='0') { echo 'OK - Message Posted, please see your WP Blog'; nxs_addToLog($logNT, 'M', 'OK - TEST Message Posted '); } else { nxs_metaMarkAsPosted($postID, 'WP', $options['ii']); nxs_addToLog($logNT, 'M', 'OK - Message Posted ', $extInfo);} }
      if ($ret == 'OK') return 200; else return $ret;
  }
}  
?>