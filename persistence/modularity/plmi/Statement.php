<?php

namespace persistence\modularity\plmi;

/**
 *
 * @author cleber
 *        
 */
interface Statement 
{
	/**
	 * @return string contendo o valor correspondente a instrução sql
	 */
	public function getStatement();
}

?>