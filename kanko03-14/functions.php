<?php
/*
 * メニュー機能
 */
register_nav_menu('main', 'メインナビ');

/*
 * カスタム投稿タイプ：新着情報
 */
register_post_type(
	'news',
	array(
	'labels' => array(
				'name' => '新着情報',
				'add_new_item' => '追加：新着情報',
				'edit_item' => '編集：新着情報'
				),
	'public' => true,
	'supports' => array('title', 'editor')
	)
);

/*
 * カスタム投稿タイプ：東京の魅力
*/
register_post_type(
	'appealings',
	array(
	'labels' => array(
				'name' => '東京の魅力',
				'add_new_item' => '追加：東京の魅力',
				'edit_item' => '編集：東京の魅力'
				),
	'public' => true,
	'supports' => array('title', 'editor', 'thumbnail')
	)
);

/*
 * カスタム投稿タイプ：コース案内
*/
register_post_type(
	'course_info',
	array(
	'labels' => array(
				'name' => 'コース案内',
				'add_new_item' => '追加：コース案内',
				'edit_item' => '編集：コース案内'
				),
	'public' => true,
	'supports' => array('title', 'editor', 'thumbnail')
	)
);

/*
* カスタム投稿タイプ（バナー）の登録
*/
register_post_type(
	'banner',
	array(
		'labels' => array(
		'name' => 'バナー',
		'add_new_item' => 'バナーの追加',
		'edit_item' => 'バナーの編集'
		),
	'public' => true,
	'supports' => array('title', 'thumbnail')
	)
);

/*
 * アイキャッチ画像の有効化
 */
add_theme_support('post-thumbnails');

/*
 * 管理用ログイン画面の設定
*/
function login_css()
{
	echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/css/login.css">';
}
add_action('login_enqueue_scripts', 'login_css');

function login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );
