<?php
define('TMP_PATH', __DIR__.'/../.tmp');
define('ABSPATH', __DIR__ . '/');
define('FS_CHMOD_FILE', fileperms( ABSPATH ) & 0777 | 0755 ));
require_once __DIR__.'/../vendor/autoload.php';
// Load vendor required classes and functions
require_once __DIR__.'/../vendor/10quality/wp-file/tests/framework/wp-functions.php';
require_once __DIR__.'/../vendor/10quality/wp-file/tests/framework/class-wp-filesystem.php';

$wp_filesystem = new WP_Filesystem;