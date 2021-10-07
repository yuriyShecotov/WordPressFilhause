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
define( 'DB_NAME', 'FilatovA' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'GS((NNsKLy7SND-/' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '9zDA5<0E3tOo4i(|<p:97cPVcR!e1Wy/TdXraj]#bVg=.qVk9D]Y%KVg1AWbc+N*' );
define( 'SECURE_AUTH_KEY',  'PU;^Mt;nBi7g&)p WjVS$DuTXVd&AkW=rDAS~ARvp>705&X2kNVaN.|VZ/2<xmaG' );
define( 'LOGGED_IN_KEY',    '/%%9!{o#ZCSU[)!^JWi2OgXl0l%HA^nKF-_d*jhHv`jea&N@h2VpX97u?66]v!/p' );
define( 'NONCE_KEY',        '%c7I+:3-6CdKDuqr`W(N*l/F@e^.XZoE~09-GI/ AIR*OKe 5]ZP(K]QiqA0ZApt' );
define( 'AUTH_SALT',        'x}3pgtXtMN1q@W@JxVQiZYU^0<,q[O.K=AA&SQ.dnlFe$~>~=M7-OAltmAPB=&gt' );
define( 'SECURE_AUTH_SALT', ']!,LC+;h#(Is4lXK=4:C(-X6,m5$<fe!5NlJ1&_qTmzaRY}(DW6`):P M%6 z<7z' );
define( 'LOGGED_IN_SALT',   'R@]UYT(=+isD/~#^;@T-]JW^>[hC6g)6@k<;*6u!3a~@m8>gfBAtSd(lR{-ohd%q' );
define( 'NONCE_SALT',       '>4,i;7M|-iU%*Sa~-fd-cyX;Af7P T2oOWIPYI;.#M3{q15}6,dXBO1zLtpi818.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'LH_';

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
