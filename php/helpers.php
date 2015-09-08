<?php
// Simplified PHP functions
function query ($query) {
    return mysqli_query(connection(), $query);
}
function num_rows ($query_results) {
    return mysqli_num_rows($query_results);
}
function fetch_assoc ($query_results) {
    return mysqli_fetch_assoc($query_results);
}
?>