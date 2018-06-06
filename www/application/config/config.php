<?php
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');

$db = Database::getInstance('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
