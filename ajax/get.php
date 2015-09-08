<?php
require_once('../required.php');
$entryid = isset($_GET['id']) ? $_GET['id'] : false;
if ($entryid !== false) {
    echo $entryid;
}
else {
    echo "No Id Given";
}
?>