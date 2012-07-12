<?php

namespace exception;

/**
 * Classe corresponde a uma exceção no momento da conexão com o banco de dados
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version PL_MPAR 1.0.0 
 */
class PLConnectionException extends \Exception
{
	/**
	 * Método define a mensagem para um exceção 
	 * @param string $message define a mensagem correspondente ao erro 	
	 */
	public function __construct($message = null) 
	{
		parent::__construct ($message);
	}
}

?>