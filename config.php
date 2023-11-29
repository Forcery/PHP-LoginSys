<?php 
//DataBase Connection and DataBase Access

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PSW', '');
define('DB_NAME', 'login-sys');

$link = new mysqli(HOSTNAME, USERNAME, PSW, DB_NAME);

