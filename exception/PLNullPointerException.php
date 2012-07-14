<?php

namespace exception;

/**
 * Classe representa uma exceção correspondente a entrada de um ponto nulo
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version PL_MPAR 1.0.0       
 */
class PLNullPointerException extends \Exception 
{
	public function __construct($message = null)
	{
		parent::__construct($message);
	}
}

?>