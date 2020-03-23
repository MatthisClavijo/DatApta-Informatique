<?php
require "controler.php";
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "inscription":
            inscritpion();
            break;
        case "add_user":
            adduser();
            break;
    }
} else {
    inscription();
}
