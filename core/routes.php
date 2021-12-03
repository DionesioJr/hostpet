<?php
include("autoload.php");
include("config.php");
include("database.php");
include("core.php");


$routes = [];
$routes['router_default'] = 'Site';
router($routes);
