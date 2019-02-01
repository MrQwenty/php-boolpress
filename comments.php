<?php
include "comments-data.php";
$slug = $_GET['slug'];
$database = json_encode($comments[$slug]);
echo $database;
?>
