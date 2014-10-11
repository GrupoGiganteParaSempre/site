<?php

namespace GPS\Model;
use \GPS\DB;

class Model
{
	protected $_data = array();

	public function __construct(Array $data)
	{
		$this->_data = $data;
	}

	public function __get($param)
	{
		if (isset($this->_data[$param]))
		{
			return $this->_data[$param];
		}
	}

	/**
	 * Descobre qual a tabela associada ao model
	 * 
	 * @return string Nome da tabela
	 */
	protected static function table()
	{
		$model_class = explode('\\', get_called_class()); $model_class = strtolower(end($model_class));
		$table = isset(self::$_table) ? self::$_table : $model_class.'s';
		return $table;
	}

	/**
	 * Busca todos os registros desse model
	 * 
	 * @return Array
	 */
	public static function all()
	{
		$records = array_map(function($record) {
		 	return new self($record);
		}, DB::fetchAll('SELECT * FROM '.static::table()));

		return $records;
	}

	/**
	 * Busca um determinado post pelo slug
	 * 
	 * @param  String $slug Identificação única do post
	 * @return Post         Model do post
	 */
	public static function findBySlug($slug)
	{
		$sql = 'SELECT * FROM '.static::table().' WHERE slug=?';
		return new Post(DB::fetchAssoc($sql, [$slug]));
	}

}
