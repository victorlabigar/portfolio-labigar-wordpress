<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till the menu
 *
 * Author: StudioViq
 * Author URI: http://studioviq.nl/
 */ ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html id="top" class="no-js no-touch" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?php labi_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
		
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

		
    <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script><![endif]-->
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

  </head>

	<body <?php body_class(); ?>>
		
		
		<div id="main-wrapper">
		<!-- Your main site content. -->
		
			<header>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6">
							<a id="avatar" class="center-content" href="<?php echo home_url(); ?>"></a>
						</div>
						<div class="col-xs-6">
							<nav class="desktopNav pull-right"><?php labi_main_menu(); ?></nav>
							
							<a id="clickMe" class="mobileBtn pull-right">
                <span></span>
              </a>
	
						</div>	
					</div>	
				</div>	
			</header>
			<!-- end header -->
			
			
			<div id="main" class="site-main">
