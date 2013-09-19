<!DOCTYPE html> 
<html> 
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?> 
	
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ios_inspired/styles.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		<script>
		// all dialog buttons should close their parent dialog
		$(".ui-dialog button").live("click", function() {		
			$("[data-role='dialog']").dialog("close");		
		});
		$(document).on("mobileinit", function(){
		  $.mobile.defaultPageTransition = "slide";
		});
	</script>
		<style>
		#footerTabs {
			background: #FFF -webkit-radial-gradient(circle, #FFF, #dee2e4);
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<div data-role="page" data-theme="b" id="jqm-home">
		<div data-role="header">
			<h1><?php bloginfo('name'); ?></h1> 
		</div>

		<div data-role="content">
