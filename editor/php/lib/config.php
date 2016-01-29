<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

/*
 * DB connection script for Editor
 * Created by http://editor.datatables.net/generator
 */

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 * Edit the following with your database connection options
 */
$sql_details = array(
	"type" => "Mysql",
    "user" => "david",         // User name
    "pass" => "Treatment1",    // Password
    "host" => "localhost",      // Database server
    "port" => "",               // Database port (can be left empty for default)
    "db"   => "rhdir",    // Database name
	"dsn"  => "charset=utf8"
);
