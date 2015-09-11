<?php

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
define("SITE_NAME", "PHP Project");
define("SITE_LOCATION", ROOT . "/php_project_base");    // For absolute file paths: SITE_LOCATION . "/whatever.php"
define("DATABASE_TYPE", "mysql")   //sqlite, mysql, pgsql

function connection() {
    // Fill this with relevant data.
    $servername = "host";
    $username = "username";
    $password = "password";
    $dbname = "database_name";

    if (DATABASE_TYPE == "mysql") {
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    } elseif (DATABASE_TYPE == "sqlite") {
        // Create connection
        $conn = sqlite_open($dbname, 0666, $sqliteerror);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $sqliteerror);
        }
    } elseif (DATABASE_TYPE == "pgsql") {
        // Create connection
        $conn = pg_connect("host=" . $servername . "dbname=" . $dbname . "user=" . $username . "password=" . $password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . pg_last_error());
        }
    }
    
    return $conn;
}
?>