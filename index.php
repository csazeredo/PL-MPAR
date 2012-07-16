<?php

use persistence\PL_ActiveRecord;

use persistence\PL_PGSQL;
use connection\PL_Connection;

require_once 'persistence/db_active_record/PL_PGSQL.php';
require_once 'persistence/connection/PL_Connection.php';

$db = PL_ActiveRecord::getInstance('client');

$db->selectALL();
$where = $db->where('cd_cli = 1');
$where->orW('cd_cli = 4');


$res = $db->execute();

foreach ($res as $row)
{
	var_dump($row) . '<br>';
}









 