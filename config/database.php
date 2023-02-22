<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Andy');
define('DB_PASS', 'Bavumile@2022');
define('DB_NAME', 'php_andy');


//connte connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection 

if($conn->connect_error) {
    die('Connection Failed' . $conn-> connect_error);
}

