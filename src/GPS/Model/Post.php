<?php

namespace GPS\Model;

/**
 * Class Post
 *
 * @package GPS\Controller
 */
class Post
{

	/**
	 * Busca todos os posts no blog
	 * 
	 * @return Array
	 */
	public static function all()
	{
		global $app;
		$sql = "SELECT * FROM posts";
		return $app['db']->fetchAll($sql);
	}

}
