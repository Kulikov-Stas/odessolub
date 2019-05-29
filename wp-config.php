<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'odessolu_db');

/** Имя пользователя MySQL */
define('DB_USER', 'odessolu_db');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'fN9WZtjm');

/** Имя сервера MySQL */
define('DB_HOST', 'odessolu.mysql.ukraine.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Itnog)j.j>fdljvVZSd|v!$R3lKl=MCJRp)D=!naW|.7RUK`&*neb_Y-B-AA>Lc0');
define('SECURE_AUTH_KEY',  'Q=pDca*lcV1keHZ:HkAOb(|[8N>9=:637wWHZYP`qMD78Axo:z~^ kkG YC(la>]');
define('LOGGED_IN_KEY',    '44S>z)iWg&Iv+%I[}nLt|!U)Z.c[_zyFNkvaw1oJ1NGQV4s1Vqi0vk?Yz7YSb2km');
define('NONCE_KEY',        'Znd3oGM+Q83p{[)|w:oY|Yr$vy&e~/`C`}uyDJ`+aG;<,/+t%oa!EWU<7:tqC`^:');
define('AUTH_SALT',        'sz3%K/$f{zDbi0)*vibefz!<K`*Ae[pgFnNf1QZ7|qg}2cPHH<Bm8s6l+ZpTE?e[');
define('SECURE_AUTH_SALT', '89LwF[p|C&v}c3l6PU/.tIf,HZUfty+~[tut}9$vZ+(q?|i0&}YUf>R8nut^JmqF');
define('LOGGED_IN_SALT',   '{^</r(#IlOD8bUgdG[!c-.B^5uf[J[#<a&9NUHAl[kv9hx!}wKysu5G9(|+M0(~G');
define('NONCE_SALT',       '|+fi;cIO3`sd{Q=49?:r3z#+n))hGLZNgbs|67wY*r2l|+*Y.RvaS|RQB:$*b$pc');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
