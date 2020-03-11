<?php

var_dump($_GET["page"]);

$page = (isset($_GET["page"]))? $_GET["page"] : "accueil";

require "html/accueil.php";

?>