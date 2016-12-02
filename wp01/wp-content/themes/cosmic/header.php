<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo("charset")?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
<title><?php bloginfo('name');?> <?php wp_title('|'); ?></title>
<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<header>
			<h1>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?>
				</a> <span>- <?php bloginfo('description')?> -
				</span>
			</h1>
		</header>
		<nav id="global">
			<?php wp_nav_menu();?>
		</nav>
		<main>
		<div id="contents">