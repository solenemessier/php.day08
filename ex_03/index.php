<?php
session_start();
$name = NULL;
if (!isset($_SESSION["name"]))
    $_SESSION["name"] = "platypus";
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    if ($name != NULL) {
        $_SESSION["name"] = $name;
    }
}
    echo "Hello ".$_SESSION["name"];
?>