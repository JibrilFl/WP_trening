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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'jibril_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'wU.YQC8Po=UD.+I%,m=95s_l4ha6r p2xQPzTo8Nfdv~I(C.# ][F7gzVuBf&*`b' );
define( 'SECURE_AUTH_KEY',  ' W>}`(Ry5pNXefg%)imSwrX,RYqob7zx`gp.pgc+R4AeHT Nk.@@Zi+ Y|j`I*-:' );
define( 'LOGGED_IN_KEY',    'U]jrno PB})FKTcTpv9`X:K@O6oaEOJ^)(5YbgiUK1?<Y68!m}8Ith-=? GIiD:D' );
define( 'NONCE_KEY',        '>A-FvW]<g+0}zXzz k.y[#U8>.pr bWlW1&_wUO0@|F7Y7H^I:Eu {P{5e-$Zx`n' );
define( 'AUTH_SALT',        '|?]p%[B/p(GFGadcAh;x$0BFP7@vI )uJdd-W{{T%Zg>#kYPE]rZQi)sx(%A]gsi' );
define( 'SECURE_AUTH_SALT', '1#h(u5M{^p,@N$Ii4LpPppbHC(F0yS1r|_K2O@Dtt?~O9A-]-8yIwz65v.^8#jd8' );
define( 'LOGGED_IN_SALT',   '/3>&wGF2$3z^ejvm4}OwgqXWY|h:^>we?VC26G8woe^fofhd`q[}bcwI>)ZB1* U' );
define( 'NONCE_SALT',       'g*]@$V;@G~0Czjv-_]J|N^ttRe4 a-Is}YJs=@8V8zO>14$gK{L2Z@t$G=&}+QgD' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
