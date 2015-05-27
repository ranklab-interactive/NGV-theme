<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/touch.png" rel="apple-touch-icon-precomposed">
	
	<!-- css + javascript -->
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-63195947-1', 'auto');
	  ga('send', 'pageview');

	</script>    
	<?php wp_head(); ?>       
</head>

<body <?php body_class(); ?>>

<!-- header -->
<header>
	<nav id="top-bar" role="navigation">
		<div class="row">
			<div class="small-12 columns">
				<div class="right">
					888.123.4567
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar', 'container' => false, 'menu_class' => 'inline-list right' ) ); ?> 			
			</div>
		</div>		
	</nav>


	<div class="row">
	    <div class="small-12 columns">
		    <!-- logo -->
			<div class="logo left">
				<a href="<?php echo home_url(); ?>" title="Next Generation Village">
					<img src="<?php echo get_template_directory_uri(); ?>/style/images/ngv-logo.png" alt="Logo" width="310px">
				</a>
			</div>
			<!-- /logo -->
		
			<!-- <div id="mobile-header" class="hide-for-medium-up"><a id="responsive-menu-button" href="#sidr-main">Menu</a></div> -->
			<nav id="main-nav" class="hide-for-small" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => false, 'menu_class' => 'inline-list right'  ) ); ?>
			</nav>	
		</div>
	</div>
</header>