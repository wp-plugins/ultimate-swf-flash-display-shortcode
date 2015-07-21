<?php
/**
 * @package ultimate-swf-flash-display-shortcode
*/
/*
Plugin Name: Ultimate SWF Flash Display Shortcode
Plugin URI: http://www.connexdesigns.com/blog
Description: If you are having problem in display flash object on your website or internet explorer this widget is for you. Enjoy and rate us on Plugin Directory
Version: 0.1
Author: Kristijan Lopac
Author URI: http://www.connexdesigns.com
*/
add_shortcode('cd_flash', 'ultimate_swf_flash_display_shortcode');
 function ultimate_swf_flash_display_shortcode($atts){
 	$atts = shortcode_atts(array(
 		'swf_option' => 'url',
 		'url_source' => '',
 		'internal_directory' => '',
		'width' => '300',
		'height' => '300',
 		'allow_script_access' => 'always',
		'quality' => 'high',
 		'bgcolor' => '#fff',
                'wmode' => 'transparent'
 	), $atts);
 	extract($atts);
        if($swf_option == "url"){
            $dataSource = $url_source;
	}else{
            $internal = get_site_url();
            $internalDirectorySource = $internal . '/' . $internal_directory;
            $dataSource = $internalDirectorySource;
	}
    $data_display = "";
	if(empty($dataSource)){
		$data_display .= "You are seeing this message cause either your external or internal directory is blank. You must have to put the Flash Object Source URL or directory to display Flash Object on your website";
		}
	else{
	$data_display .= "
		<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' width='$width' height='$height' id='movie_name' align='middle' style='visibility: visible;'>
				<param name='movie' value='$dataSource'/>
				<param name='allowScriptAccess' value='$allow_script_access'>
				<param name='quality' value='$quality'>
				<param name='bgcolor' value='$bgcolor'>
				<param name='wmode' value='$wmode'>
		<!--[if !IE]>-->
		<object type='application/x-shockwave-flash' data='$dataSource' width='$width' height='$height'>
				<param name='movie' value='$dataSource'/>
				<param name='allowScriptAccess' value='$allow_script_access'>
				<param name='quality' value='$quality'>
				<param name='bgcolor' value='$bgcolor'>
				<param name='wmode' value='$wmode'>
		<!--<![endif]-->
			<a href='http://www.adobe.com/go/getflash'>
				<img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player'/>
		</a>
		<!--[if !IE]>-->
		</object>
		<!--<![endif]-->
		</object>
";
$data_display .= "<div class='copy' style='color:#ccc; font-size: 9px; '><a href='http://www.visualscopeasia.com/' title='click here' target='_blank'>VisualscopeAsia.com</a></div>";
}
 	return $data_display;
 }