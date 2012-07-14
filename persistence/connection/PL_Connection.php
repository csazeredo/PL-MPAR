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
	protected static $conn;
	protected static $dbserver;
	
	/**
	 * Método carrega os dados de conexão do arquivo de configuração
	 */
	protected static final function loadConfig()
	{
		if(file_exists('config/lp-config.xml'))
		{
			$configXML = simplexml_load_file('config/lp-config.xml');
			
			$dbinfo = $configXML->dbserver		  	. ':';
			$dbinfo.= $configXML->dbname->getName() . '=';
			$dbinfo.= $configXML->dbname  		  	. ';';
			$dbinfo.= $configXML->host->getName() 	. '=';
			$dbinfo.= $configXML->host;
			
			$user   = $configXML->user;
			$psswd  = $configXML->pssw;
			
			self::$conn		= new \PDO($dbinfo, $user, $psswd);
			self::$dbserver = $configXML->dbserver;
		} 
		else 
		{
			throw new PLConnectionException('Erro ao carregar arquivos de configuração para conexão com o banco de dados');
		}
	}	
}

?>