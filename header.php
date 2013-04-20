<!DOCTYPE html>
<html>
	<head>
		<meta charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" type="text/css" media="screen, projection" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/stophe.js"></script>

		<?php wp_head(); ?>
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-27807789-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
	</head>
	<body <?php body_class(); ?>>
		<div class="sheet">
			<header>
				<a href="http://www.youtube.com/user/stophedotcom" class="socialIcon youtube" rel="tooltip" title="Youtube"></a>
				<a href="https://twitter.com/#!/stophecom" class="socialIcon twitter" rel="tooltip" title="Twitter: @stophecom"></a>
				<a href="http://www.facebook.com/christopheschwyzer" class="socialIcon facebook" rel="tooltip" title="Facebook"></a>
				<a href="https://plus.google.com/u/0/102233928583371274024/posts" class="socialIcon google" rel="tooltip" title="Google +"></a>
				<a href="mailto:christophe.schwyzer@gmail.com" class="socialIcon mail" rel="tooltip" title="Write Email"></a>

				<h1>
					<a href="<?php echo home_url(); ?>/" class="logo" title="<?php bloginfo('name'); ?>">stophe</a><a href="javascript:;" class="arrow down mainMenuOpener"></a>
				</h1>

				<?php
				if (function_exists('has_nav_menu') && has_nav_menu('primary-menu')) {
					?>
					<nav class="main-menu">
						<?php wp_nav_menu(array('depth'   => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'main-menu-list',
												'menu_id' => 'main-nav', 'theme_location' => 'primary-menu')); ?>
					</nav>
				<?php
				} else {
					?>
					<p>Error: There is no menu</p>
				<?php } ?>
			</header>
