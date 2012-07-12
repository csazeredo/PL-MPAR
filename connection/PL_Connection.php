<?php

namespace connection;
require_once 'exception/PLConnectionException.php';

use exception\PLConnectionException;

/**
 * Classe corresponde a interface de conexão portável com o banco de dados.
 * @author Cleber Azeredo <cleber.sistemas.info@gmail.com>
 * @version LP_MPAR 1.0.0
 */
abstract class PL_Connection 
{
	private $user;
	private $psswd;
	private $dbinfo;
	
	protected $conn;
	protected static $dbserver;
	
	/**
	 * 
	 * @throws PLConnectionException se os dados de configuração da conexão estiverem incorretos
	 */
	public function __construct()
	{
		$this->loadConfig();
		$this->conn = new \PDO($this->dbinfo, $this->user, $this->psswd);			
	}
	
	/**
	 * Método carrega os dados de conexão do arquivo de configuração
	 */
	private final function loadConfig()
	{
		if(file_exists('config/lp-config.xml'))
		{
			$configXML = simplexml_load_file('config/lp-config.xml');
			
			$this->dbinfo 	= $configXML->dbserver		  	. ':';
			$this->dbinfo  .= $configXML->dbname->getName() . '=';
			$this->dbinfo  .= $configXML->dbname  		  	. ';';
			$this->dbinfo  .= $configXML->host->getName() 	. '=';
			$this->dbinfo  .= $configXML->host;
			
			$this->user		= $configXML->user;
			$this->psswd	= $configXML->pssw;
			$this->dbserver = $configXML->dbserver;
		} 
		else 
		{
			throw new PLConnectionException('Erro ao carregar arquivos de configuração para conexão com o banco de dados');
		}
	}	
}

?>