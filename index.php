<?php
require_once('required.php');

session_start();
$current_user = isset($_SESSION['user']) ? $_SESSION['user'] : 0;


require_once(SITE_LOCATION . '/shared/head.php');
include_once(SITE_LOCATION . '/shared/header.php');

include_once(SITE_LOCATION . '/shared/templates/markdown_editor.php');

include_once(SITE_LOCATION . '/shared/footer.php');
require_once(SITE_LOCATION . '/shared/foot.php');
?>
