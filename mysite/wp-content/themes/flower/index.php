<!doctype html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charaset'); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" />
<title><?php bloginfo('name');?> <?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
	<?php body_class(); ?>
	<h1>
		<?php bloginfo('name'); ?>
		<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		<div class="post">
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			</h2>
			<p class="date">
				<?php echo get_the_date();?>
				<?php the_time();?>
			</p>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile;?>
		<?php endif;?>
	</h1>
	<?php wp_footer(); ?>
</body>
</html>
