<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
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
define('DB_NAME', 'rotary');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'dw1991lb55');

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
define('AUTH_KEY',         'hwKtr+Z:&*7*KO]/p-c*OgfAb1 nu?.=|FqF~=Era/t#U63byF-;p)vrqP|OOm>>');
define('SECURE_AUTH_KEY',  ':by] cE`aI.}j8lJ,%me:qNmOh4a{(#8;<oIalnd:Ek3fg]owa5VS__6U)Tyvi)+');
define('LOGGED_IN_KEY',    'sj>1^]8K2UG9X.6Bd|k*n1y.E$B@>,^>-jl QMkXHtpvR3,k@ODKT5*mJfh;<B!<');
define('NONCE_KEY',        'V6f.u`uIxf4yijC&=LJO5JEvjx/.5g|(~g7K&HDH39:.K+#(xM/hyVsP`%!8!Bw,');
define('AUTH_SALT',        'P%waf+Ppm/A5.wr+(j =Wd<<(FEpOeIP<JOod/5h@[ 4^,9<wBP,Ru@~+h98G<>1');
define('SECURE_AUTH_SALT', 'xNR%48$ |x7kWq_jIk`K+uR>v;{-eU(Ls;[Ka.R=x(3?|&c?SKRyS)3<S5}D/-_r');
define('LOGGED_IN_SALT',   '[=:})P-R!o&-i?2Mn?TA%&~m4]w02Djm!.w{PTL]^,tgY#@{,ExK@Vw0f|-vRmr%');
define('NONCE_SALT',       '=<c(7AHZp_x!Tu24m4Q+WV=[oi&sR<.j~%}E%JIaPy$QW7}:_o3!^K$GF|?x!{+H');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'rt_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
