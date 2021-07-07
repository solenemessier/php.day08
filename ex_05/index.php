<?php
$name = "platypus";
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    setcookie("name", $name);
} else if (isset($_COOKIE["name"])) {
    $name = $_COOKIE["name"];
}
echo "Hello $name";
?>