<?php

namespace persistence;

require_once ('persistence/PL_ActiveRecord.php');

use persistence\PL_ActiveRecord;

/**
 *
 * @author cleber
 *        
 */
class PL_MYSQL extends PL_ActiveRecord 
{
	
	/**
	 */
	function __construct() 
	{
		
	}
	/* (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::selectALL()
	 */public function selectALL() {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::select()
	 */public function select(array $fields = array()) {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see \persistence\PLI_ActiveRecord::insert()
	 */public function insert(array $data = array()) {
		// TODO Auto-generated method stub
		}

}

?>