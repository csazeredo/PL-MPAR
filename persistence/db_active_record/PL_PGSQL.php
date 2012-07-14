<?php

namespace persistence;
use exception\PLNullPointerException;

require_once 'persistence/PL_ActiveRecord.php';

/**
 * 
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version PL_MPAR 1.0.0
 */
final class PL_PGSQL extends PL_ActiveRecord
{
	private $table;
	
	/**
	 * 
	 * @param unknown_type $table
	 * @throws PLNullPointerException
	 */
	public function __construct($table)
	{
		if(empty($table))
		{
			throw new PLNullPointerException('Entrada de dados nula');
		}
		$this->table = $table;
	}

	/**
	 * (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::selectALL()
	 * @return \PL_PGSQL
	 */
	public function selectALL()
	{
		return $this;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::select()
	 * 
	 */
	public function select(array $fields = array())
	{
		
	}
	
	/**
	 * 
	 * @param array $data
	 */
	public function insert(array $data = array())
	{
		
	}
}

?>