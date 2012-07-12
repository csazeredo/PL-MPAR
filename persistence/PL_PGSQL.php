<?php

namespace persistence;
use exception\PLNullPointerException;

require_once 'persistence/PL_ActiveRecord.php';

/**
 * 
 * @author cleber
 *
 */
class PL_PGSQL extends PL_ActiveRecord
{
	private $table;
	
	public function __construct($table)
	{
		if(empty($table))
		{
			throw new PLNullPointerException('Entrada de dados nula');
		}
		parent::__construct();
		$this->table = $table;
	}

	/**
	 * (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::selectALL()
	 * @return \PDOStatement
	 */
	public function selectALL()
	{
		$SQL = 'SELECT *
				  FROM '. $this->table;
		$oRes = $this->conn->query($SQL);
		return $oRes;
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