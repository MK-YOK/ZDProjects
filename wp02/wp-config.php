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
define('DB_NAME', 'wp02db');

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
define('AUTH_KEY',         'M( `Ajx|c0z~wNQ9veB-E}v,9/vD4Z~=1*ju#6n9_5/:c}G`Vu=ZP7zlytICRFgV');
define('SECURE_AUTH_KEY',  '?IGg3d(2oPp0(GB-zpB%`R.fQosLEezLg*PY`*kz*N&~>2Z:#W~i[>@t#r4:^Y(1');
define('LOGGED_IN_KEY',    '8UqM_{twJT_0lhH,M_HN`At~dmBFA7`9^X[S^FM&Lu#L[^I:)vwM:px_zC$J30k{');
define('NONCE_KEY',        'aA1finq_+,{SYzO0.;QR5;2MrsYK?$7vYnq>u#jMq#3~2=$+>,rmt&pIU(iA(VOb');
define('AUTH_SALT',        'B_]5i+W(y6KeJP/:M&@+u(XiP~ZWCu*c-jn@LF&h)b?i4}.hC0%C~k;R,BffD7+K');
define('SECURE_AUTH_SALT', 'g(ek-32w7W- ,YyBKY4r|nSz@qlGcm*s,,O{50(idn[,ol$t]zd]x[O!9Y+o,K$Z');
define('LOGGED_IN_SALT',   'ce?PY+6L>f4c*6L.Atoly,j*0%V5rHlzzKo6MJ^&C!7PWeg{bRg$OBq^=P=K1s|#');
define('NONCE_SALT',       'Zz,cD-! }R,vUC: v287V{1CJSm7+rMW[K*.2Fx+%+AY`8/q3>UE=#>AcncCo2bC');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'sa_';

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
