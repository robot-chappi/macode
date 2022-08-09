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
define( 'DB_NAME', 'macode' );

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
define( 'AUTH_KEY',         ',#}+Z8=#5PkATy^6*IkN(i53>5w2`ruERMn|l<Aq!y%]5*:A^/Z>ZC0ndKLvCKH)' );
define( 'SECURE_AUTH_KEY',  'fkf??53]4g+fQ8GlYE80Z,<(9/0cF)ZT`#|o/_Rb( 5mRvEj9KXukP{lT:SaQ~*B' );
define( 'LOGGED_IN_KEY',    '$eb{`eB!w~m3o/R*b1r)fL<2Y[,)?JJPHsbtx(?`g4& Qzv36PP[@w0FD4^bsQG]' );
define( 'NONCE_KEY',        '.@o3|`<75s~+52<iR#/JBUruXl],LQW<wd7m!0Izan<Dg,|h=yJ?[^e 8dEs4a}P' );
define( 'AUTH_SALT',        '#afPh^JHJ_YuGjh[ftqu{-Tt-:s_A3vM+AKz=8z<i^h*%OafW2ly8MS(l<;2q>#7' );
define( 'SECURE_AUTH_SALT', '`%jIvW_*Lay*^&S`!I/6q_wZ46x#H{|aYCNe=4!q8AY~^HFRC3dj1*+DRu|S99W|' );
define( 'LOGGED_IN_SALT',   'C>!dPuJmCcH,R6rhMWaaG9O+Lu#Apc1TE`kv35E5#(Gcr.bj{FJxA8KqplsbrJM?' );
define( 'NONCE_SALT',       'Z*E1tMNQt,q#y=4V!g$4W_.bV An|#Ay)*Rsq}^TOJw2c>z#M{9H:<R.5zoC3%B>' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
