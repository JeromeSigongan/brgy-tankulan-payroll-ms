<?php

define('BASE_URL',   'http://localhost/brgy-tankulan-payroll-ms/registration/');

define('DB_SERVER', 	'localhost');
define('DB_USER', 		'root');
define('DB_PASSWORD', '');
define('DB_NAME', 		'payroll_msdb');
define('DB_PREFIX', 	'bt_');

error_reporting(1);

date_default_timezone_set("Asia/Manila");

$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ( mysqli_connect_errno() ) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

session_start();
