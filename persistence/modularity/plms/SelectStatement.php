<?php

namespace persistence\modularity\plms;

// Comments
use exception\PLNullPointerException;
use persistence\modularity\plmi\Joinable;
use persistence\modularity\plmi\Filterable;
use persistence\modularity\plmi\Stackable;
use persistence\modularity\plmi\Statement;

// Comments
require_once ('persistence/modularity/plmi/Joinable.php');
require_once ('persistence/modularity/plmi/Filterable.php');
require_once ('persistence/modularity/plmi/Stackable.php');
require_once ('persistence/modularity/plmi/Statement.php');

/**
 *
 * @author cleber
 * @version        
 */
class SelectStatement implements Joinable, Filterable, Stackable, Statement 
{
	private $statement;
		
	/**
	 * 
	 * @param string $table
	 * @param array $fields
	 * @throws PLNullPointerException
	 */
	function __construct($table, array $fields = null) 
	{
		$this->statement = 'SELECT ';
		
		if(empty($table))
		{
			throw new PLNullPointerException();
		} 
		else if(!empty($fields))
		{
			$this->statement.= implode(',', $fields);
		} 
		else
		{
			$this->statement.= '* ';
		}
		$this->statement.= ' FROM '.$table;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function __toString()
	{
		return $this->statement;
	}
	/* (non-PHPdoc)
	 * @see \persistence\modularity\plmi\Statement::getStatement()
	 */
	 public function getStatement() 
	 {
		return $this->statement;
	 }

}

?>