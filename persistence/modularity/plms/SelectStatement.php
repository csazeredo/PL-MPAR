<?php

namespace persistence\modularity\plms;

require_once ('persistence/modularity/plmi/Joinable.php');
require_once ('persistence/modularity/plmi/Filterable.php');
require_once ('persistence/modularity/plmi/Stackable.php');

use persistence\modularity\Joinable;
use persistence\modularity\plmi\Filterable;
use persistence\modularity\plmi\Stackable;

/**
 *
 * @author cleber
 * @version        
 */
class SelectStatement implements Joinable, Filterable, Stackable 
{
	
	/**
	 */
	function __construct() {
	}
}

?>