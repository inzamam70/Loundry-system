<?php
require_once '../dbconn.php';
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($query, $result);

dd($result);