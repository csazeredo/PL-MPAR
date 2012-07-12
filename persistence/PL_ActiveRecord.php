<?php

namespace persistence;

use connection\PL_Connection;
use persistence\PLI_ActiveRecord;

require_once ('connection/PL_Connection.php');
require_once 'persistence/PLI_ActiveRecord.php';


/**
 *
 * @author cleber
 *        
 */
abstract class PL_ActiveRecord extends PL_Connection implements PLI_ActiveRecord
{
	private static $pgsql  = 'pgsql';
	private static $mssql  = 'mssql';
	private static $mysql  = 'mysql';
	private static $oracle = 'oracle';
	
	private static $instance;
	
	/**
	 *@return PL_ActiveRecord
	 */
	public static function getInstance()
	{
		if(empty(self::$instance))
		{
			if(self::$dbserver == self::$pgsql)
			{
				self::$instance = new PL_PGSQL();
			}
			elseif(self::$dbserver == self::$msqql)
			{
				self::$instance = new PL_MSSQL();
			}
			elseif(self::$dbserver == self::$mysql)
			{
				self::$instance = new PL_MYSQL();
			}
			elseif(self::$dbserver == self::$oracle)
			{
				self::$instance = new PL_ORACLE();
			}
		}
		return self::$instance;
	}
}

?>