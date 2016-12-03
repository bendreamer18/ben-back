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
define('DB_NAME', 'ben-is-back');

/** Имя пользователя MySQL */
define('DB_USER', 'ben-is-back');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'JFJaYll7824');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7y C32/C%D`0N]c:.[5B:Q{9{;),c]x8g?YZ[t})&>Jzk(+rTxiFn:bKma,.rI8M');
define('SECURE_AUTH_KEY',  'Hj=WQ#k(~K-;k1{v0ZeX1ew&IL=,^U&m|[%^AVSdrF@iv{XMyo= GoLp79ASfE7 ');
define('LOGGED_IN_KEY',    '(-~=7~gDI+,1_n&PCf^jP|XN)Av-LJ+0hj5S})(Sa>M<nB4z<ENx&dG*rdQ^b&+D');
define('NONCE_KEY',        'oRkJ@BRn%mR,f/$%C*; CfoZ{($c&o&4J]2zj,-f?2Fm^ae*]s3:F)!~jD{}Eufg');
define('AUTH_SALT',        'S4.226Tb^xr,4eeX$t7q3t3^Mg;(v@C2Au]] >/)&z 6Xu/8x!pme({Zq%dC`E%|');
define('SECURE_AUTH_SALT', 'Ob5g]paS-ym2U-^&)n&:v*l5b3%b/)`:%8ZZb0U:T]!~<--5 |gw/;WRB#}c ~<j');
define('LOGGED_IN_SALT',   ':c 4NvHmBi_W9|lmZikPHVSjga%(3f#5|xyq$ux+NE#e-^Z@YEk/0y&/};iLWkq ');
define('NONCE_SALT',       'I_}wgKb{#^4h?W,GiyfKI<8V^USSrCy#.WfSn02W x-YQ&x8tXMs`d2Tu4_m3Uuh');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bback_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
