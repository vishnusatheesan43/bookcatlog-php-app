<?php
function getDb() {
    static $db = null;
    if ($db === null) {
        $host = getenv('DB_HOST');
	$dbname = getenv('DB_NAME');
	$user = getenv('DB_USER');
	$pass = getenv('DB_PASS');
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Create table...
	$db->exec("
	   CREATE TABLE IF NOT EXISTS books 
	( id INT AUTO_INCREMENT PRIMARY KEY,
	  title VARCHAR(255) NOT NULL,
	  author VARCHAR(255) NOT NULL,
	  year INT
         )
       ");	
    }
    return $db;
}
