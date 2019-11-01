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
define( 'DB_NAME', 'dream' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Dream' );

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
define( 'AUTH_KEY',         'wS/kVl~[w(BB0dhcii+Nc-lnMk5u2%`%630z+B9M{Xa2SiXnIHsi}/Dt~]{?@hGr' );
define( 'SECURE_AUTH_KEY',  '~1+1Ued[!c,)Z4X1GSzHV;+^t~RX/?H%mFg_.@o<ZHKk$.$u.(0jxpUE7Qb^|xPd' );
define( 'LOGGED_IN_KEY',    '%qnt2:5`VUfy1OTkc~;Z[}W(}g?TJ@olY+u_2*CT@+fI5uMj%zkRx>#tVfd3caxz' );
define( 'NONCE_KEY',        'w{_|f^joqt+yQp*]Cx{7ET8m+Aljk2QL37-_OAisw4>$<Z|@{h{Y:F=Cp[>1_:rz' );
define( 'AUTH_SALT',        '(=kc0vI&w]d6M}JacT?-G)ug5dxl:s}@+&8,st)n;zy@rkK>?qeCt!Vec,DM7kW_' );
define( 'SECURE_AUTH_SALT', 'hY.<t-cJ+g6Z46ZLR.&K4k&OxUUR6]W3>$JCnnOT@99M]wva6o]QJY;:.qm[uG;S' );
define( 'LOGGED_IN_SALT',   'qprPMe`E7=|VapkwT&-tdVSteAfFs/@u[%JsM33Wa3]duR042[8f@>=MzXcu6;w4' );
define( 'NONCE_SALT',       'JkG@_5aBn]a9C/oodg5$)V`PAx4N-Z]UF-x7e;qu,2.Oclg26>gU@4tjxte<NnSG' );

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
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wordpress.loc');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
