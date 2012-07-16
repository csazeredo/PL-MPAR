<?php

namespace persistence;
use persistence\modularity\plmi\Filterable;

use exception\PLNullPointerException;
use persistence\modularity\plms\SelectStatement;
use persistence\modularity\plms\WhereStatement;

require_once 'persistence/db_active_record/PL_ActiveRecord.php';
require_once 'persistence/modularity/plms/SelectStatement.php';
require_once 'persistence/modularity/plms/WhereStatement.php';

/**
 * 
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version PL_MPAR 1.0.0
 */
final class PL_PGSQL extends PL_ActiveRecord
{
	private $table;
	private $statement;
	
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
		$select = new SelectStatement($this->table);
		$this->statement = $select;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::select()
	 * 
	 */
	public function select(array $fields = array())
	{
		$select = new SelectStatement($this->table, $fields);
		$this->statement = $select;
	}
	
	/**
	 * 
	 * @param array $filter
	 * @return \persistence\modularity\plms\WhereStatement
	 */
	public function where($filter)
	{
		if(!empty($filter))
		{
			$where  = new WhereStatement($this->statement, $filter);
			$this->statement = $where;
			return $where;
		}
	}
	
	/**
	 * 
	 * @param array $data
	 */
	public function insert(array $data = array())
	{
		
	}
	 
	/**
	 * 
	 * @throws PLNullPointerException
	 * @return \PDOStatement
	 */
	public final function execute($fetch = \PDO::FETCH_ASSOC)
	{
		if(empty($this->statement))
		{
			throw new PLNullPointerException();	
		}
		else
		{
			$statement = $this->statement->getStatement();
			$result    = parent::$conn->query($statement);
			$result->setFetchMode($fetch);
			//echo $statement;
			return $result; 
		}
	}
}

?>