<?php
// Simplified PHP functions
function query ($query_string) {
    if (DATABASE_TYPE == "mysql") {
        $query = mysqli_query(connection(), $query_string);
    } elseif (DATABASE_TYPE == "sqlite") {
        $query = sqlite_query(connection(), $query_string);
    } elseif (DATABASE_TYPE == "pgsql") {
        $query = pg_query(connection(), $query_string);
    }
    return $query;
}
function num_rows ($query_results) {
    if (DATABASE_TYPE == "mysql") {
        $num_rows = mysqli_num_rows($query_results);
    } elseif (DATABASE_TYPE == "sqlite") {
        $num_rows = sqlite_num_rows($query_results);
    } elseif (DATABASE_TYPE == "pgsql") {
        $num_rows = pg_num_rows($query_results);
    }
    return $num_rows;
}
function fetch_assoc ($query_results) {
    if (DATABASE_TYPE == "mysql") {
        $results = mysqli_fetch_assoc($query_results);
    } elseif (DATABASE_TYPE == "sqlite") {
        $results = sqlite_fetch_array($query_results, SQLITE_ASSOC);
    } elseif (DATABASE_TYPE == "pgsql") {
        $results = pg_fetch_assoc($query_results);
    }
    return $results;
}
?>