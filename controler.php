<?php

require "model.php";
require "encryption.php";

try
{
    $db = new PDO('mysql:host=localhost;dbname=site_app;charset=utf8', 'root', '-DatApta-');
    //$db = new PDO('mysql:host=localhost;dbname=site_app;charset=utf8', 'root', '');
    return $db;
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


function adduser( ){

    if (!($_POST["password"] == $_POST["Cpassword"])){
        echo ("<script>alert(\"Vos mots de passe ne correspondent pas ! \")</script>");
        viewInscription();
    }
    else if (!isset($_POST["cgu"])){
        echo ("<script>alert(\"Vous n'avez pas accepté les conditions générales d'utilisation ! \")</script>");
        viewInscription();
    }
    else if (!($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"])){
        echo ("<script>alert(\"Veuillez renseigner tous les champs du formulaire ! \")</script>");
        viewInscription();
    }
    else if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]) {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        list($mdp, $salt, $iv) = encryptionPassword($_POST["password"]);
        $mdp = htmlspecialchars($mdp);
        $date = htmlspecialchars($_POST["date"]);
        InsertUser($nom, $prenom, $mdp, $email, $date, $salt, $iv);
        echo ("<script>alert(\"Veuillez vous connecter maintenant ! \")</script>");
        viewAccueil();
    }
    else{
        echo ("<script>alert(\"Une erreur est survenu lors de votre inscription, veuillez réessayer plus tard. Si le problème persiste veuillez nous contacter \")</script>");
        viewInscription();
    }

}
function addcapteur(){
    if ( $_POST["Nom"] && $_POST["Unité"]){
        $nom=htmlspecialchars($_POST["Nom"]);
        $unité=htmlspecialchars($_POST["Unité"]);
        InsertCapteur($nom,$unité);
    }

}
function add_test(){
    if ( $_POST["Nom"] && $_POST["Ids"]){
        $nom=htmlspecialchars($_POST["Nom"]);
        $idcapteur=htmlspecialchars($_POST["Ids"]);
        InsertTest($nom,$idcapteur);
    }
}

function modifuser(){
    if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]) {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        $mdp = htmlspecialchars($_POST["password"]);
        list($mdp, $salt, $iv) = encryptionPassword($_POST["password"]);
        $mdp = htmlspecialchars($mdp);
        $date = htmlspecialchars($_POST["date"]);
        modificationuser($nom,$prenom,$mdp, $salt, $iv, $email,$date);
        $_SESSION['nom']=$nom;
        $_SESSION['prénom']=$prenom;
        $_SESSION['mot_de_passe']=$mdp;
        $_SESSION['Adresse mail']=$email;
        $_SESSION['date_de_naissance']=$date;
        viewProfil();
    }


}
function modifadmin(){
    if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]) {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        $mdp = htmlspecialchars($_POST["password"]);
        list($mdp, $salt, $iv) = encryptionPassword($_POST["password"]);
        $mdp = htmlspecialchars($mdp);
        $date = htmlspecialchars($_POST["date"]);
        modificationadmin($nom,$prenom,$mdp, $salt, $iv, $email,$date);
        $_SESSION['nom']=$nom;
        $_SESSION['prénom']=$prenom;
        $_SESSION['mot_de_passe']=$mdp;
        $_SESSION['Adresse mail']=$email;
        $_SESSION['date_de_naissance']=$date;
        viewProfil();
    }


}
function connexion(){

    if($_POST["email"] && $_POST["psw"]){
        $email=htmlspecialchars($_POST["email"]);
        $psw=htmlspecialchars($_POST["psw"]);
        testconnexion($email,$psw);
    }
}
function deconnexion(){
    $_SESSION['ID']="";
    $_SESSION['nom']="";
    $_SESSION['prénom']="";
    $_SESSION['Adresse mail']="";
    $_SESSION['date_de_naissance']="";
    $_SESSION['type']="";
    $_SESSION['isConnected']=false;
    $_SESSION['type']="vide";
    $_SESSION['search']="vide";
    viewAccueil();

}
function add_QR(){
    if ( $_POST["Question"] && $_POST["Réponse"]){
        $question=htmlspecialchars($_POST["Question"]);
        $reponse=htmlspecialchars($_POST["Réponse"]);
        InsertQR($question,$reponse);
    }

}
function modif_Q($ID){
    if( $_POST["Edit_Q"]){
        $question=htmlspecialchars($_POST["Edit_Q"]);
        EditQ($question,$ID);
    }
}
function modif_R($ID){
    if( $_POST["Edit_R"]){
        $reponse=htmlspecialchars($_POST["Edit_R"]);
        EditR($reponse,$ID);
    }
}
function recherche_users(){
    if($_POST["recherche"] && $_POST["type"]){
        $recherche=htmlspecialchars($_POST["recherche"]);
        $type=htmlspecialchars($_POST["type"]);
        $result=search($recherche,$type);
        return($result);

    }
}
function envoyerMessage($destinataire,$expéditeur){
    if ($_POST["contenu"]){
        $contenu=htmlspecialchars($_POST["contenu"]);
        InsertMessage(date('d-m-y h:i:s'),$expéditeur,$destinataire,$contenu);

    }
}
function sendTicket(){
    if ($_POST["Explication"]) {
        if (isset($_POST["email"])) {
            if ($_POST['email'] !=""){


                $name = htmlspecialchars($_POST["email"]);
                $ex = htmlspecialchars($_POST["Explication"]);
                InsertTicket(date('d-m-y h:i:s'),$name,$ex);
            }
            else{
                echo ("<script>alert('Veuillez rentrer une adresse mail')</script>");
            }

        } else {

            $name = htmlspecialchars($_SESSION['nom']);
            $ex = htmlspecialchars($_POST["Explication"]);
            InsertTicket(date('d-m-y h:i:s'),$name,$ex);
        }

    }



}