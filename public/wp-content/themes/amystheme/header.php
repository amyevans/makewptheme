
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a href="<?php echo home_url('/')?>" class="navbar-brand"><?php bloginfo('name')?></a>
			</div>
			<!-- If you just use wp_get_pages() you can't add styling to <li> elements, so instead use wp_bootstrap_navwalker -->
			<?php
				wp_nav_menu( array(
	    			'menu'              => 'primary',
	    			'theme_location'    => 'primary',
	    			'depth'             => 2,
	    			'container'         => 'div',
	    			'container_class'   => 'collapse navbar-collapse',			
	    			'container_id'      => 'navbar-collapse',
	    			'menu_class'        => 'nav navbar-nav navbar-right',
	    			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	    			'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>

		</div><!-- /.container-fluid -->
	</nav>