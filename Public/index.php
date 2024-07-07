<?php

define("DS" ,DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP" ,ROOT.DS.'App');
define("VIEW",APP.DS.'Views');
define("CONFIG",APP.DS.'Config');
define("CORE",APP.DS.'Core');
define("MODEL",APP.DS.'Models');
define("CONTROLLER",APP.DS.'Controllers');

require '../vendor/autoload.php';
$obj = new MVC\Core\app();