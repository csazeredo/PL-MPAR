<?php

namespace persistence\modularity\plmi;
use persistence\modularity\plmi\Selectable;
use persistence\modularity\plmi\Sortable;

require_once ('persistence/modularity/plmi/Selectable.php');
require_once ('persistence/modularity/plmi/Sortable.php');
/**
 * 
 * @author cleber
 * @version
 */
interface Filterable extends Selectable, Sortable {}
?>