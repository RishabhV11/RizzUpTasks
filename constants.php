<?php 
//Start Session
session_start();

//Create Constants to save Database Credentials
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root'); //Your Database username instead of 'root'
define('DB_PASSWORD', ''); //Your Database Password instead of null/empty
define('DB_NAME', 'task-manager'); //Your Database Name if it's not 'task_manager'

define('SITEURL', 'http://localhost/rizuptasks/'); //Update the home URL of the project if you have changed port number or it's live on server

?>