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
define('DB_NAME', 'wp04db');

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
define('AUTH_KEY',         'L,]PN=m:DMh>[b`rH?qaYwM?>CN.cb%;]ED2*hoJ1@W!73g0WuI<ngS~Q4-rCl(2');
define('SECURE_AUTH_KEY',  '1|)XFX5%lXVSr`9}[?lg|vcoD6/v-Dn!cAd !?.};*tJesZ.JdK=$06>22uf%I9W');
define('LOGGED_IN_KEY',    'N5MxiRgBzGWEn8XwRbuH)O.$P4,I)g!k7s:mTBu$3SHq_|0T%H:d`9I=fojb?:M%');
define('NONCE_KEY',        'YP7?VHF<(;AILwh9MCxEW8yqqQq|gQNVAsHXlRXf@YPAT07-xvh5or*}!W!QN4v-');
define('AUTH_SALT',        '0zns3t6pJY <`I8G#+zi9bj4>D9uZ$&_NxQ,~Th~LAg>Y/._&#e{Nvs:u|yBMZOo');
define('SECURE_AUTH_SALT', '{uzAmLk$v0M8j&G&V_g9PGtPp#Zd8A(Kr}=^xcol*XgrBHT 3It;V8hWEif=5:0)');
define('LOGGED_IN_SALT',   'sa/RM3>B,FN{YV:)Ehp08I:-L2xji{^R]syHM?DBij//N(ds@&X^/VSIqF;X^J&?');
define('NONCE_SALT',       'mazUI/,^B]EnIZW&OvMex=_$(%qKuayx|m1 kl/=WzfbyRx+nA~#S)OLr1#7~K}N');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'cs_';

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
