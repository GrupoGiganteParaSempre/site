<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/../resources/config/prod.php';
require_once __DIR__ . '/../src/Bootstrap.php';
require_once __DIR__ . '/../src/Routes.php';

$app['http_cache']->run();
