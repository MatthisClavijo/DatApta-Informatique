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
        case "accueil" :
            if(sizeof($_SESSION)==0){
                viewAccueil();
            }
            else{
                if($_SESSION['nom'] == "Admin"){
                    viewAccueilAdmin();
                }
                else{
                    viewAccueilConnexion();
                }
            }
            break;
        case "connexion" :
            connexion();
            break;
        case "deconnexion" :
            deconnexion();
            break;
        case "profil" :

            if(sizeof($_SESSION)==0){
                echo "Il faut vous connecter pour voir votre profil";
                viewAccueil();
            }
            else{
                viewProfil();
            }
            break;
        case "modif_user" :
            modifuser();
            break;
        case "delete":
            deleteuser($action[1]);
            viewgestionutilisateur();
            break;

        case "gestion_u":
            viewgestionutilisateur();
            break;

        }
    }


    else {
    viewAccueil();
}
