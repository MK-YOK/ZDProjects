<?php get_header(); ?>
<section class="leader">
	<h2>コース案内</h2>
	<p>最短60分からたっぷり１日かけた東京めぐりまで、東京の今を感じるコースをご用意しました。さまざまな東京の魅力を発見しに出かけましょう！</p>
</section>
<?php
$args = array(
		'post_type' => 'course_info',
		'post_status' => 'publish',
		'posts_per_page' => -1
		);
$customPosts = get_posts($args);
?>
<?php if ($customPosts): ?>
<?php foreach ($customPosts as $post): setup_postdata($post); ?>
<section class="courseBox">
	<h3><i class="fa fa-diamond"></i>　<?php the_title(); ?></h3>
	<?php the_post_thumbnail(); ?>
	<p><?php the_content(); ?></p>
	<dl>
		<dt>集合場所</dt>
		<dd><?php echo post_custom('meeting_place'); ?></dd>
		<dt>出発時刻</dt>
		<dd><?php echo post_custom('departure_time'); ?></dd>
		<dt>料金</dt>
		<dd><?php echo post_custom('price'); ?></dd>
	</dl>
	<p class="batch">
		<sapn class="batchTitle">所要時間</sapn>
		<span class="batchTime">
		<?php echo post_custom('required_time'); ?>
		</span>
		<span class="tani"><?php echo post_custom('time_unit'); ?></span>
	</p>
	<div class="reserve"><a class="btn" href="#">空席状況と予約</a></div>
	<!-- <div class="recomend">オススメ</div> --> 
</section>
<?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>