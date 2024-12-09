<?php 
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!isset($_SESSION["html"])) $_SESSION["html"] = 0;
if (!isset($_SESSION["css"])) $_SESSION["css"] = 0;
if (!isset($_SESSION["javascript"])) $_SESSION["javascript"] = 0;

if(isset($_SESSION)) {
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["fav_language"])) {
        if($_POST["fav_language"] == "HTML") {
            $_SESSION["html"] += 1;
        } elseif($_POST["fav_language"] === "CSS") {
            $_SESSION["css"] += 1;
        } else {
            $_SESSION["javascript"] += 1;
        }
    }
} 

    echo json_encode([
    "html" => $_SESSION["html"],
    "css" => $_SESSION["css"],
    "javascript" => $_SESSION["javascript"],
]);
?>