<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name') ?><?php wp_title() ?></title>
<link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url') ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
<?php wp_head() ?>
</head>
<body>

<header>
	<div class="contain clearfix">

	<h1><a id="headerh1" href="/">Celine Celines</a></h1>

	<?php wp_nav_menu( 'Main Menu' ) ?>

	<!-- <form id="searchForm" method="get" action="">
		<div><input type="text" name="s" placeholder="search celinecelines"></div>
	</form> -->

	</div>
</header>

<section class="body contain">

	<div id="whois">
		<h3>Who is celinecelines?</h3>
		<div>
			<p><em>we are many.</em></p>
			<p>celinecelines is a design studio run by Céline Semaan Vernon. Céline also runs <a href="http://slowfactory.com">slowfactory.com</a> and is associated with <a href="http://noweapon.org">noweapon.org</a>.</p>
			<p><a href="<?php echo site_url( 'about' ); ?>">Read more about us.</a></p>
			<p><a href="<?php echo site_url( 'work' ); ?>">Work with us.</a></p>
		</div>
	</div>
	
	<div class="main">

