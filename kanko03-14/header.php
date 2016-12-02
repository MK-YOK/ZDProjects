<?php
/*--------------------------
  bodyタグのクラス名を制御
 --------------------------*/
$bodyClass="";

// 404ページの場合
if(is_404()){
	$bodyClass = 'page404';
}
// 新着情報の個別表示ページの場合
elseif(is_singular('news') ){
	$bodyClass = 'news';
}
else{
	// 親ページがある場合（問い合わせ内容確認ページ等）は、親のスラッグ名を利用
	if ($post->post_parent){
		$parent = get_post($post->post_parent);
		$bodyClass = $parent->post_name;
	}
	else{
		$bodyClass = $post->post_name;
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="日常とは違う楽しさや安らぎを提供するTOKYO観光ツーリスト。和の情緒とビジネスの喧騒を感じながら様々な東京の表情を感じてください。">
<meta name="keyword" content="TOKYO観光ツーリスト,一日観光,観光バス,二泊三日,オプショナルツアー">
<title><?php the_title();?> | <?php bloginfo('title'); ?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<!-- Web fonts CSS -->
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv-printshiv.min.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body class="<?php echo $bodyClass;?>">
<header>
	<div class="container">
		<h1 class="logo"><a href="<?php echo home_url(); ?>"><span class="tagline"><?php bloginfo('description'); ?></span><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>"></a></h1>
		<ul class="utilNav clearfix">
			<li><a href="#">FAQ</a></li>
			<li><a href="#">サイトマップ</a></li>
			<li><a href="#">ヘルプ</a></li>
		</ul>
		<p class="docRequest"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shiryo_btn.png" alt="資料請求"></a></p>
	</div>
	<nav id="siteNav">
		<div class="container">
			<ul class="clearfix">
			<?php  $navItems = wp_get_nav_menu_items('mainnavi'); ?>
				<?php foreach ($navItems as $navItem): ?>
				<li>
					<?php if($navItem->post_excerpt === $bodyClass):?>
						<?php echo $navItem->title; ?>
					<?php else:?>
						<a href="<?php echo $navItem->url; ?>"><?php echo $navItem->title; ?></a>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</nav>
</header>
<section id="hero">
	<div class="container">
		<div class="mainImg"><?php the_title(); ?>
			<div class="badge">お問い合わせ窓口　電話0120-12-3456</div>
		</div>
	</div>
</section>
<div class="container">
	<section id="contents" class="clearfix">
		<div id="mainContentsOuter">