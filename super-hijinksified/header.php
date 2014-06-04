<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		
		<script src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.5.0.min.js"></script>
	</head>
	
	<body <?php body_class(); ?>>
	
		<header>
			<div class="container">
				<a class="logo" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/images/logo.jpg" alt="<?php bloginfo('title');?>"/></a>
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
			</div>
		</header>
