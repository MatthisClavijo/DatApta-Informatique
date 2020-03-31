<?php
require "controler.php";
require "view.php";
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);

    switch($action) {
        case "inscription":
            viewinscription();
            break;
        case "add_user":
            adduser();
            break;
        case "modifprofil":
            viewModif();
            break;
        case "acceuil" :
            viewAcceuil();
            break;
    }
} else {
    viewAcceuil();
}
