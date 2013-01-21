<?php

$url = getenv('HEROKU_POSTGRESQL_CRIMSON_URL');

// URL pattern is: postgres://USER:PASS@HOST:PORT/DBNAME
// Get credentials
$urlData = explode('//', $url);
$dbData = explode(':', $urlData[1]);

// Username
$user = $dbData[0];

$parts = explode('@', $dbData[1]);

// passwords
$password = $parts[0];

// host
$host = $parts[1];

$parts = explode('/', $dbData[2]);

// port 
$port = $parts[0];

// database
$database = $parts[1];

$config = new MidgardConfig();
$config->dbuser = $user;
$config->dbpass = $password;
$config->host = $host;
$config->port = $port;
$config->database = $database;
$config->dbtype = "PostgreSQL";

// save file /app/.midgard2/conf.d
$config->save_file('heroku', true);

?>
