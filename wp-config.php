<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'landnig' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w bm66[T7(Sy}pKjVO_E>^OsAnRJGZxh[P5 |!ec.Wjj^Hd|sX;puTfbqZ:M|w$K' );
define( 'SECURE_AUTH_KEY',  'E3JR_EgcmpW#us-:HEdA}AO+bhR;mS[5kDS{+h:EDLmR2nR*zO.3%}k0*bbO!F20' );
define( 'LOGGED_IN_KEY',    '0|i} M2wOp/m0Oe.&FYH+nN|{5o7ytx]sbLgeu7%<WBG{+Io%w7Jz1IR^S));8Mh' );
define( 'NONCE_KEY',        'lXDI:6)p?v;>k:,h-wERKFo#7}!&IW|PancEU}H6Yae4U_viUk9eDJ`n:8bpc@(/' );
define( 'AUTH_SALT',        '>S _,w< ,eo43A!v>>/SX++Q@F<HG$/HW,>,L*X]?8VzV6@z~]00uO5)!9{t1>$t' );
define( 'SECURE_AUTH_SALT', '2sqn<4T+H)EV{z5n4N$yk1!r7:%LFv8!L URuc dzIe2AW^8S,{8Gjz ~TKAL,HQ' );
define( 'LOGGED_IN_SALT',   'c]KG,Xb=ny@PF8ps3j%+Ia|U=hixVz^d#&OS}aF*JS8++S(rohU#Dn$N8N)9Tp_s' );
define( 'NONCE_SALT',       '+.$+*{q h0/)+gJ8VoWRf<B9iW&3`fS#i8%2U3 _I}& r=N6( =fdjor]0ZAx=B?' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_argos';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
