<?php
define('TMP_PATH', __DIR__.'/../.tmp');
define('FS_CHMOD_FILE', '0777');
require_once __DIR__.'/../vendor/autoload.php';
// Load vendor required classes and functions
require_once __DIR__.'/../vendor/10quality/wp-file/tests/framework/wp-functions.php';
require_once __DIR__.'/../vendor/10quality/wp-file/tests/framework/class-wp-filesystem.php';

$wp_filesystem = new WP_Filesystem;