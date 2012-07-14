<?php

namespace persistence\modularity\plmi;

require_once ('persistence/modularity/plmi/Selectable.php');
require_once ('persistence/modularity/plmi/Sortable.php');

use persistence\modularity\Selectable;
use persistence\modularity\Sortable;

/**
 * 
 * @author cleber
 * @version
 */
interface Stackable extends Selectable, Sortable {}

?>