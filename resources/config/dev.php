<?php

// include the prod configuration
require __DIR__.'/prod.php';

// Disable cache
unset($app['http_cache.cache_dir']);
unset($app['twig.options.cache']);

// enable the debug mode
$app['debug'] = true;