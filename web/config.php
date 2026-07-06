<?php
// SourceBans++ (c) 2014-2026 SourceBans++ Dev Team
// Licensed under the Elastic License 2.0.

if (!defined('IN_SB')) {
    echo 'You should not be here. Only follow links!';
    die();
}

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'sourcebans');
define('DB_PREFIX', getenv('DB_PREFIX') ?: 'sb');
define('DB_PORT', getenv('DB_PORT') ?: '3306');
define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8mb4');
define('STEAMAPIKEY', getenv('STEAMAPIKEY') ?: '');
define('SB_EMAIL', getenv('SB_EMAIL') ?: '');
define('SB_NEW_SALT', getenv('SB_NEW_SALT') ?: '$5$');
define('SB_SECRET_KEY', getenv('SB_SECRET_KEY') ?: '');
