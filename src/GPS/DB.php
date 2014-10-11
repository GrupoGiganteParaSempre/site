<?php

namespace GPS;

class DB
{

	public static function fetchAll($sql, $params = array())
	{
		global $app;
		return $app['db']->fetchAll($sql, $params);
	}

	public static function fetchAssoc($sql, $params = array())
	{
		global $app;
		return $app['db']->fetchAssoc($sql, $params);
	}

}
