<?php
$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loundry_system";
$conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
$db =  new mysqli($hostname, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function d($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var)
{
    d($var);
    die();
}
?>