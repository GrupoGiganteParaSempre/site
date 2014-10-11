<?php

use Silex\Application\TwigTrait;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

/** @var Silex\Application $app * */
$app->get('/', 'GPS\Controller\Post::index');
$app->get('/index.html', 'GPS\Controller\Post::index');
$app->get('{slug}', 'GPS\Controller\Post::view');


## Error Handlers ##############################################################
#
$app->error(function (\Exception $e, $code) use ($app) {
	switch ($code) {
		case 404:
			$message = $app['twig']->render('error404.html.twig');
			break;
		default:
			$message = 'We are sorry, but something went terribly wrong.';
	}

	if ($app['debug']) {
		$message .= ' Error Message: ' . $e->getMessage();
	}

	return new Response($message, $code);
});

return $app;