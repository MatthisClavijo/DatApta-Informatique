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
            viewAccueil();
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
            header('Location: http://localhost/Datapta-Informatique/gestion_u' ,true);
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
            header('Location: http://localhost/Datapta-Informatique/capteur ',true);
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
            header('Location: http://localhost/Datapta-Informatique/test ',true);
            exit;
            break;
        case "up_user" :
            up_user($action[1]);
            header('Location: http://localhost/Datapta-Informatique/gestion_u' ,true);
            exit;
            break;
        case "down_user" :
            down_user($action[1]);
            header('Location: http://localhost/Datapta-Informatique/gestion_u' ,true);
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
            header('Location: http://localhost/Datapta-Informatique/gestion_faq' ,true);
            exit;
            break;
        case "edit_Q" :
            modif_Q($action[1]);
            header('Location: http://localhost/Datapta-Informatique/gestion_faq' ,true);
            exit;
            break;
        case "edit_R" :
            modif_R($action[1]);
            header('Location: http://localhost/Datapta-Informatique/gestion_faq' ,true);
            exit;
            break;
        case "statistiques" :
            if ($_SESSION['isConnected']) {
                viewStatistique();
            }
            else{
                echo ("<script>alert(\"Il faut vous connecter pour consulter vos statistiques\")</script>");
                viewAccueil();
            }
            break;
        case "cgu" :
            viewCGU();
            break;
        case "recherche" :
            viewRecherche();
            break;
        case "recherche_users":
           $_SESSION['search']=recherche_users();
           viewRecherche();
            break;
        case "mess" :
            viewMessage();
            break;
        case "conv" :
            $_SESSION["destinataire"]=$action[1];
            $_SESSION["expéditeur"]=$action[2];
            if ($action[2] != "send"){
                viewConversation();
            }
            if ($action[2]=="send"){
                $user2=$_SESSION["destinataire"];
                $user=$_SESSION['nom'];
                envoyerMessage($_SESSION["destinataire"],$_SESSION["nom"]);
                header("Location: http://localhost/Datapta-Informatique/conv/$user2/$user");
                exit;
            }
            if ($action[2]=="retour"){
                header("Location: http://localhost/Datapta-Informatique/mess");
                exit;
            }

            break;

        case "help" :
            viewTicket();
            break;
        case "sendTicket" :
            sendTicket();
            viewAccueil();
            break;
        case "Ticket" :
            viewVisuTicket();
            break;
        case "detail" :
            if($action[2]=="retour"){
                header("Location: http://localhost/Datapta-Informatique/Ticket");
                exit;
            }
            else {
                $_GET['name'] = $action[1];
                $_GET['date'] = $action[2];
                viewContenuTicket();
            }
            break;
        case "supprTicket" :
            DeleteTicket($action[1],$action[2]);
            header("Location: http://localhost/Datapta-Informatique/Ticket");
            exit;
            break;

    }
}


else {
    $_SESSION["destinataire"]="vide";
    $_SESSION["expéditeur"]="vide";
    $_SESSION['isConnected']=false;
    $_SESSION['type']="vide";
    $_SESSION['search']="vide";
    viewAccueil();
}