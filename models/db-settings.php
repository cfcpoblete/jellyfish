<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

// Database Information

// $db_host = "localhost"; //Host address (most likely localhost)
// $db_name = "202"; //Name of Database
// $db_user = "root"; //Name of database user
// $db_pass = ""; //Password for database user
// $db_table_prefix = "uc_";

$db_host = "us-cdbr-iron-east-04.cleardb.net"; //Host address (most likely localhost)
$db_name = "heroku_f983b2606cb7543"; //Name of Database
$db_user = "bcac11fe2ea022"; //Name of database user
$db_pass = "679a4a2e"; //Password for database user
$db_table_prefix = "uc_";

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

/* Create a new mysqli object with database connection parameters */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;

if(mysqli_connect_errno()) {
	echo "Connection Failed: " . mysqli_connect_errno();
	exit();
}

//Direct to install directory, if it exists
if(is_dir("install/"))
{
	header("Location: install/");
	die();

}

?>