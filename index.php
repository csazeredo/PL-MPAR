<?php

use persistence\PL_ActiveRecord;

use persistence\PL_PGSQL;
use connection\PL_Connection;

require_once 'persistence/db_active_record/PL_PGSQL.php';
require_once 'persistence/connection/PL_Connection.php';

$bd = PL_ActiveRecord::getInstance('client');



 