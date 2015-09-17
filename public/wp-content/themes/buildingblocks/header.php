<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title><?php bloginfo('title')?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head()?>
</head>

<header>
	<h1><a href="<?php echo home_url('/')?>"><?php bloginfo('name')?></a></h1>
</header>

<nav>
	<?php wp_nav_menu();?>
</nav>


<div id="container">