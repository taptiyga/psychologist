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
define( 'DB_NAME', 'psychologist' );

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
define( 'AUTH_KEY',         'gmb9w-BrrrZ%sT!*&;4/}Uye@$zW.Nsb3hT:GIN 7`+~s!2>vz[9-n4ULT@^rfA0' );
define( 'SECURE_AUTH_KEY',  '0b/JqsZtzTb2v7_08vs=vqsuUhyu9;]cF0B`a53im|MOrHA~ZFZofya-=P)VeLrS' );
define( 'LOGGED_IN_KEY',    'R(,RK>a~!s(@}CB{)x@7<,WQVNbhq,#?0!HvOBY/l`dxh]!f^z)`=Zy?Desz8uR}' );
define( 'NONCE_KEY',        '#u.JZ1-r6`q}_fcccV^MQOS;7~)<hTTve8kekW([#@1uWAvUAwC8{yr/[,R5)0l!' );
define( 'AUTH_SALT',        'rBO>,b1/Ti`B @+eP=cA(G7Bq{H-d.GxR<T+<Q*PC3B %t0!wpZ|N+<7q&:M=!|I' );
define( 'SECURE_AUTH_SALT', 'vuY+?<0z9{gw+<j6+d|6.wPTFT pF-+G!,f1P#Dtq;^4u%8<q`Ol@o0:x^rBn$jA' );
define( 'LOGGED_IN_SALT',   'l6j<u)}rstIPW%`c{D;R69!iJtzG-_37ppB0_}/Qi0EAJI9U9h8:;9$(K0Z|_ %B' );
define( 'NONCE_SALT',       'n7@X}rbDQaM}QY)u66a|*27&/?YS#4LZUej$%1@Xn1bu^g#`&Y{;J/kjj=ZX]|xu' );

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
