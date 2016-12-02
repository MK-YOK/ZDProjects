<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp03db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'secret');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uaALq2z[|1rdm=NN#SEJSL(^h_V&.@]rbr+^=_{Q%*RReojHg+l&]^yE^;tPi<?*');
define('SECURE_AUTH_KEY',  'wGLGEBB,f +f# J;dM=h<05tO@f`5 pu/y47XcD,AtK gu6aO]XZC0NpdYqAaCCp');
define('LOGGED_IN_KEY',    'Ne^+0/$RmK6X$UP @V=|d0Y6;juff=>7HR#N6]N4_<s0:S;bd};(Idt:@ ps}QYp');
define('NONCE_KEY',        'q [%}4VJ]i~a}spIGaTMH<y `(t,?&quLnt2Fnt_}FaeKp|^$x+3)T7[xVtkYnPK');
define('AUTH_SALT',        'P]z=.,7 pQAIBSN|/ {q4vDEu6u0k89nb>/x(e|;QoKd^rJQFi39]%{17Lal#jC`');
define('SECURE_AUTH_SALT', 'F<j1`,2 |:1/.KM.!}4(x&a]HSLUZX_EtW@/mbedA^tEc$Gy.CP9?Gnl|-GH2-Ms');
define('LOGGED_IN_SALT',   'Wq2-6E0dC0;xY!@U ~TFH/y.@4:%Lk2RhQ%c.c&F$A:c=%%1yVM5`aUFnZ//5J(Y');
define('NONCE_SALT',       ' nS][c4*~zjULrd@_h lmw0=0%+W^1]gS+*iA1Zph<-VQMb)oO*r1SvJdKPR ,na');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'tk_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
