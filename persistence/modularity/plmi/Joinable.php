<?php
namespace persistence\modularity\plmi;
use persistence\modularity\plmi\Sortable;
use persistence\modularity\plmi\Selectable;

require_once ('persistence/modularity/plmi/Sortable.php');
require_once ('persistence/modularity/plmi/Selectable.php');

interface Joinable extends Selectable, Sortable {}

?>