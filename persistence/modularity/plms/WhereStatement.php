<?php

namespace persistence\modularity\plms;

use exception\PLNullPointerException;
use persistence\modularity\plmi\Statement;
use persistence\modularity\plmi\Stackable;
use persistence\modularity\plmi\Filterable;

require_once ('persistence/modularity/plmi/Stackable.php');
require_once ('persistence/modularity/plmi/Statement.php');


/**
 *
 * @author Cleber Azeredo
 * @version
 * @copyright
 *        
 */
class WhereStatement implements Stackable, Statement 
{
	private $statement;
	
	/**
	 * 
	 * @param Filterable $filterObj
	 * @param string $filter
	 * @throws PLNullPointerException
	 */
	function __construct(Filterable $filterObj, $filter) 
	{
		if(empty($filter))
		{
			throw new PLNullPointerException();
		}
		else if(empty($filterObj))
		{
			throw new PLNullPointerException();
		}
		else if(count($filter) <= 0)
		{
			throw new PLNullPointerException();
		}
		else 
		{
			$this->statement = $filterObj->getStatement();
			$this->statement.= ' WHERE ' . $filter;
		}
	}
	
	/**
	 * 
	 * @param string $conditional
	 * @throws PLNullPointerException
	 */
	public function andW($conditional)
	{
		if(empty($conditional))
			throw new PLNullPointerException();
		$this->statement.= ' AND ' . $conditional;
	}
	
	/**
	 * 
	 * @param string $conditional
	 * @throws PLNullPointerException
	 */
	public function orW($conditional)
	{
		if(empty($conditional))
			throw new PLNullPointerException();
		$this->statement.= ' OR ' . $conditional;
	}
	
	public function in($string)
	{
		
	}
	
	public function notIn($string)
	{
		
	}
	
	public function exists($string)
	{
		
	}
	
	public function all($string)
	{
		
	}
	
	public function some($string)
	{
		
	}
	
	public function any($string)
	{
	
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \persistence\modularity\plmi\Statement::getStatement()
	 * @return string
	 */
	public function getStatement() 
	{
		return $this->statement;
	}

}

?>