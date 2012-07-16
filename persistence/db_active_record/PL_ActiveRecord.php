<?php

namespace persistence;

use connection\PL_Connection;
use persistence\PLI_ActiveRecord;

require_once 'persistence/connection/PL_Connection.php';
require_once 'persistence/db_active_record/PLI_ActiveRecord.php';


/**
 *
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version PL-MPAR
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
	public static function getInstance($table)
	{
		if(empty(self::$instance))
		{
			self::loadConfig();
			
			if(self::$dbserver == self::$pgsql)
			{
				self::$instance = new PL_PGSQL($table);
			}
			elseif(self::$dbserver == self::$mssql)
			{
				self::$instance = new PL_MSSQL($table);
			}
			elseif(self::$dbserver == self::$mysql)
			{
				self::$instance = new PL_MYSQL($table);
			}
			elseif(self::$dbserver == self::$oracle)
			{
				self::$instance = new PL_ORACLE($table);
			}
		}
		return self::$instance;
	}
}

?>