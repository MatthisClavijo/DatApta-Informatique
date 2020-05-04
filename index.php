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
            if(sizeof($_SESSION)!=0) {
                if ($_SESSION['isConnected'] == true) {


                    if ($_SESSION['type'] == "client") {
                        viewAccueilConnexion();
                    }
                    if ($_SESSION['type'] == "admin") {
                        viewAccueilAdmin();
                    }
                }
                if ($_SESSION['isConnected']==false){
                    viewAccueil();
                }
            }
            else{
                viewAccueil();
                $_SESSION['isConnected'] = false;
            }
            break;
        case "connexion" :
            connexion();
            break;
        case "deconnexion" :
            deconnexion();
            break;
        case "profil" :
            if ($_SESSION['isConnected']) {
                viewProfil();
            }
            else{
                echo ("<script>alert(\"Il faut vous connecter pour voir votre profil\")</script>");
                viewAccueil();

            }
            break;
        case "modif_profil" :
            if($_SESSION['type']=="client"){
                modifuser();
            }
            else if($_SESSION['type']=="admin"){
                modifadmin();
            }
            break;
        case "delete_user":
            deleteuser($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_u' ,true);
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
        case "delete_capteur" :
            deletecapteur($action[1]);
            header('Location: http://localhost/datapta-informatique/capteur ',true);
            exit;
            break;
        case "test":
            viewtest();
            break;
        case "add_test" :
            add_test();
            viewtest();
            break;
        case "delete_test" :
            deletetest($action[1]);
            header('Location: http://localhost/datapta-informatique/test ',true);
            exit;
            break;
        case "up_user" :
            up_user($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_u' ,true);
            exit;
            break;
        case "down_user" :
            down_user($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_u' ,true);
            exit;
            break;
        case "foire" :
            viewFAQ();
            break;
        case "gestion_faq" :
            viewgestionfaq();
            break;
        case "add_QR" :
            add_QR();
            viewgestionfaq();
            break;
        case "delete_QR" :
            delete_QR($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_faq' ,true);
            exit;
            break;
        case "edit_Q" :
            modif_Q($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_faq' ,true);
            exit;
            break;
        case "edit_R" :
            modif_R($action[1]);
            header('Location: http://localhost/datapta-informatique/gestion_faq' ,true);
            exit;
            break;
        case "statistiques" :
            viewStatistique();
        case "cgu" :
            viewCGU();
    }
}


else {
    $_SESSION['isConnected']=false;
    $_SESSION['type']="vide";
    viewAccueil();
}