<?php



/**
 * サイドバーの登録
 */
register_sidebar(
		array(
				'before_widget' => '<section class="widget">',
				'after_widget' => '</nav></section>',
				'after_title' => '</h2><nav>'
				)
		);

?>