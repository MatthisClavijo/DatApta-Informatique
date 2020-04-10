<?php
session_start();
require "controler.php";
require "view.php";
if (isset($_GET["action"])) {
    $action=explode('/',$_GET['action']);
    switch($action[0]) {
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
            if(sizeof($_SESSION)==0){
                viewAcceuil();
            }
            else{
                viewAcceuilConnexion();
            }
            break;
        case "connexion" :
            $connexion=1;
            connexion();
            break;
        case "deconnexion" :
            $connexion=0;
            deconnexion();
            break;
        case "profil" :

            if(sizeof($_SESSION)==0){
                echo "Il faut vous connecter pour voir votre profil";
                viewAcceuil();
            }
            else{
                viewProfil();
            }
            break;

    }


} else {
    viewAcceuil();
}
