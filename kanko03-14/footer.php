</div>
<!-- ./mainContentOuter-->
<div id="sideContentOuter">
<nav class="sideNav">
	<ul>
		<li><a href="#01"><span class="sideNavinner">ショッピング<span class="sub">Shopping</span></span></a></li>
		<li><a href="#02"><span class="sideNavinner">食べる<span class="sub">Food</span></span></a></li>
		<li><a href="#03"><span class="sideNavinner">泊まる<span class="sub">Stay</span></span></a></li>
		<li><a href="#04"><span class="sideNavinner">遊ぶ<span class="sub">Playing</span></span></a></li>
		<li><a href="#05"><span class="sideNavinner">観る<span class="sub">Sightseeing</span></span></a></li>
	</ul>
</nav>
<section class="companyInfo">
	<h2>会社情報</h2>
	<div class="companyInfoinner">
		<h3>TOKYO観光ツーリスト</h3>
		<p>〒123-4567<br>東京都新宿区百人町1-2-3<br>TEL:03-1234-5678</p>
	</div>
</section>
<aside class="topicBanner">
	<?php
	$args = array(
		'post_type' => 'banner',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'meta_key' => 'banner_order',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
		);
	$customPosts = get_posts($args);
	?>
	<?php if ($customPosts): ?>
	<?php foreach ($customPosts as $post): setup_postdata($post); ?>
	<a href="<?php echo post_custom('banner_url'); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
	<?php endforeach; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</aside>
</div>
</section><!--./middle-->
</div><!-- ./contaier -->

<footer>
	<div class="container">
		<ul class="footerNav clearfix">
			<li><a href="#">FAQ</a></li>
			<li><a href="#">サイトマップ</a></li>
			<li><a href="#">ヘルプ</a></li>
		</ul>
		<small class="copyright">Copyright &copy; 201X TOKYO観光ツーリスト.</small>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>