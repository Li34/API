<?php
header('Access-Control-Allow-Origin: *');
define('APP_DEBUG', true);
define('BIND_MODULE', 'Home');
define('APP_MODE','API');
define('APP_PATH','./App/');

require './ThinkPHP/ThinkPHP.php';

?>