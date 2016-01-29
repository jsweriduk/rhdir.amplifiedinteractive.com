<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'rhbdir');
define('DB_USERNAME','aiadmin');
define('DB_PASSWORD','AmpPas$w@rd1');

$con = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

?>