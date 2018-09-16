<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<title>Blog</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/my-style.css">		
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/margin-min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nc-icons-mini-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nc-icons-outline-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/vallenato.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	.banner {
	  display: table;
	  height: 300px;
	  width: 100%;
	}
/** Proxima Nova **/

@font-face {
    font-family: 'proxima_nova_altblack';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Black-webfont.svg#proxima_nova_altblack') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'proxima_nova_altbold';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Bold-webfont.svg#proxima_nova_altbold') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Proxima Nova';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Alt Regular-webfont.svg#proxima_nova_altregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'proxima_nova_scosfthin';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova ScOsf Thin-webfont.svg#proxima_nova_scosfthin') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'proxima_nova_ltsemibold';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Semibold-webfont.svg#proxima_nova_ltsemibold') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'proxima_nova_ltthin';
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.eot?#iefix') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.woff2') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.woff') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.ttf') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/Mark Simonson - Proxima Nova Thin-webfont.svg#proxima_nova_ltthin') format('svg');
    font-weight: normal;
    font-style: normal;
}
body {
    padding: 0;
    margin: 0;
    font-family: 'Proxima Nova';
}
</style>
</head>
<body>
	<?php include'header-blade.php'; ?>
    <div class="container tp-margin">	
		<!-- <div class="header-pretitle">the oolaga blog</div> -->
		<div class="blog-header-title">the oolaga blog</div>
		<div class="blog-header-subtitle">Le blog qui déménage!</div>		