<?php

namespace GPS\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Post
 *
 * @package GPS\Controller
 */
class Post
{

	/**
	 * Splash Page
	 *
	 * @param Request	 $request
	 * @param Application $app
	 *
	 * @return mixed
	 */
	public function indexAction(Request $request, Application $app)
	{
		return print_r(\GPS\Model\Post::all());

		// return $app['twig']->render('index.html.twig', array());
	}

}
