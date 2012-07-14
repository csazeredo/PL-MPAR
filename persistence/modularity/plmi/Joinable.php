<?php
namespace persistence\modularity;

use persistence\modularity\Sortable;
require_once ('persistence/modularity/plmi/Selectable.php');

use persistence\modularity\Selectable;
interface Joinable extends Selectable, Sortable {}

?>