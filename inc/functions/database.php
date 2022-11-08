<?php

$host = getenv("DB_HOSTNAME");
$port = "5432";
$databaseName = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$connectionString = "host=$host port=$port dbname=$databaseName user=$username password=$password";

function db_connect() {
    global $connectionString;
    $db = pg_connect($connectionString);
    if (!$db) {
        echo "Error: Database connection can't be established.";
        exit;
    }
    return $db;
}

function db_query($db, $sql) {
    $result = pg_query($db, $sql);
    if (!$result) {
        echo pg_last_error($db);
        pg_close($db);
        exit;
    }
    return $result;
}