<?php

namespace exception;

/**
 *
 * @author cleber
 *        
 */
class PLNullPointerException extends \Exception 
{
	public function __construct($message = null)
	{
		parent::__construct($message);
	}
}

?>