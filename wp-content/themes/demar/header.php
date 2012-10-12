<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-907593-2");
pageTracker._trackPageview();
</script>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
		<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo $s; ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_404() ) { ?>Sorry, not found! | <? bloginfo('name'); ?><?php } ?>

</title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="http://pv3d.org/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body>

<div id="page">

<div id="header">

	<!-- <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1> -->
	<h2 id="blog-description"><?php bloginfo('description'); ?></h2>

<a href="http://pv3d.org"><img src="http://pv3d.org/logo.png" width="300px"></a>

<!-- <a href="http://www.richmediainstitute.com/papervision_Chicago_09"><img src="http://dl.getdropbox.com/u/132579/sites/pv3d.org/images/chicagotraining.jpg" align="right"></a> -->


	<ul>
		<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>">home</a></li>
		<?php wp_list_pages('title_li=&depth=1'); ?>
	</ul><div class="clear"></div>

</div><!-- end header -->