<?php

namespace persistence;

/**
 *
 * @author cleber
 *        
 */
interface PLI_ActiveRecord 
{
	/**
	 * 
	 * @param array $fields
	 */
	public function selectALL();
	
	/**
	 * 
	 * @param array $fields
	 */
	public function select(array $fields = array());
	
	/**
	 * 
	 * @param array $data
	 */
	public function insert(array $data = array());
}

?>