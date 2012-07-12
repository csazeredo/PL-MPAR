<?php

use persistence\PL_PGSQL;
use connection\PL_Connection;

require_once 'persistence/PL_PGSQL.php';
require_once 'connection/PL_Connection.php';

$bd = new PL_PGSQL('client');

$oRes = $bd->selectALL();

foreach($oRes as $row)
{
	var_dump($row['nm_cli']);
	echo '<br>';
}

 