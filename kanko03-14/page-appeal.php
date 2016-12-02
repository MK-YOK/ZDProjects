<?php get_header(); ?>
<section class="leader">
	<h2>東京の魅力</h2>
	<p>いくつもの顔をもつ東京で、他ではできない楽しみ方を探しましょう。</p>
</section>
<?php
$args = array(
		'post_type' => 'appealings',
		'post_status' => 'publish',
		'posts_per_page' => 4
		);
$customPosts = get_posts($args);
?>
<?php if ($customPosts): ?>
<?php foreach ($customPosts as $post): setup_postdata($post); ?>
<section class="recomend clearfix">
	<figure class="appealPhoto"><?php the_post_thumbnail(); ?>
		<figcaption><?php echo post_custom('place'); ?></figcaption>
	</figure>
	<h3><?php the_title(); ?><span><?php echo post_custom('subtitle'); ?></span></h3>
	<p><?php the_content(); ?></p>
</section>
<?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>