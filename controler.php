<?php

require "model.php";
require "encryption.php";

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=site_app;charset=utf8', 'root', '');
        return $db;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


function adduser( ){

            if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]) {
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
            $date = htmlspecialchars($_POST["date"]);
            modificationuser($nom,$prenom,$mdp,$email,$date);
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
        session_destroy();
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