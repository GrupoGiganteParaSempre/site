<?php

namespace GPS\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use GPS\Model;

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
	public function index(Request $request, Application $app)
	{
		return $app['twig']->render('index.html.twig', array());
	}

	public function view($slug, Request $request, Application $app)
	{
		$post = Model\Post::findBySlug($slug);
		return $app['twig']->render('post.html.twig', array(
			'title'   => $post->title,
			'content' => $post->html,
		));
	}

}
