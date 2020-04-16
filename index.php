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
                if($_SESSION['type']=="client"){
                    viewAccueilConnexion();
                }
                if ($_SESSION['type']=="admin"){
                    viewAccueilAdmin();
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
        case "delete_user":
            deleteuser($action[1]);
            header('Location: http://localhost/site%20app/gestion_u' ,true);
            exit;
            break;

        case "gestion_u":
            viewgestionutilisateur();
            break;
        case "capteur" :
            viewcapteur();
            break;
        case "add_capteur" :
            addcapteur();
            viewcapteur();
            break;
        }
    }


    else {
    viewAccueil();
}
