<?php

require_once("config.php");

$root = new User();

$root->loadById(6);

echo $root;


?>