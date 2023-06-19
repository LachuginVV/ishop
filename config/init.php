<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/wfm');
define("HELPERS", ROOT . '/vendor/wfm/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", ROOT . 'ishop');
define("PATH", ROOT . 'http://ishop');
define("ADMIN", ROOT . 'http://ishop/admin');
define("NO_IMAGE", ROOT . 'гздщфвы.тщ_шьфпуюозп');


require_once ROOT . '/vendor/autoload.php';