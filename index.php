<?php

var_dump($_GET);



$page = (isset($_GET["page"]))? $_GET["page"] : "actualite" ;

require "html/accueil.php";







?>