<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ss' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R();/1rY[|Vsbz2kJPBqF6tkTn0q6)7o?hLCL4iZ_N2dxO$M!)<g~(J!-t=<Q>an' );
define( 'SECURE_AUTH_KEY',  '8j!6(ebDiOzR5pHIz+s:r3I:,R%*7,Mxed PO2$uYp)g_J!nJwYCQxZaStBD-u-g' );
define( 'LOGGED_IN_KEY',    '3E@I//gj?qD~r<I?$O]}vGo:6HbwawN/Z2s/EWVd=DO8t;;~,LSk3i*=L!%QLU/b' );
define( 'NONCE_KEY',        'dV| Y!e#gi<_6BTj!8t)xN=f[}lUY6g^KOl0;kvt$usyTkoX&FjPcY ^K$@#g{H7' );
define( 'AUTH_SALT',        'g-f//O5gU_3tx[b w-W,xptLS^WW!RgBA.H@;J iNFphmAFw<hvMPT/GTI#_A_iK' );
define( 'SECURE_AUTH_SALT', 'B2Wz1BQ^14}gx4s>mkc#No}Wjbsj~EK]a8-&T^l%)ZBu#bHKPCn:gu}iN4RQ}r8$' );
define( 'LOGGED_IN_SALT',   'V}Z>qzs5/+k=kQL5#MK&)#vIb6Yh<1j*,:!9E*OTV3I|}7~zU3785F8cm?oGJ`VT' );
define( 'NONCE_SALT',       '5+hs]UvO9p=pKMo8P<AOH-AEb}my2O-ygRR(}bVFK|ewU$u!PZHD*.Y@Dyt{]$/O' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
