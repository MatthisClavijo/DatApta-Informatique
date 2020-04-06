<?php
require "model.php";

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

    if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]){
        $nom=htmlspecialchars($_POST["nom"]);
        $email=htmlspecialchars($_POST["email"]);
        $prenom=htmlspecialchars($_POST["prénom"]);
        $mdp=htmlspecialchars($_POST["password"]);
        $date=htmlspecialchars($_POST["date"]);
        InsertUser($nom,$prenom,$mdp,$email,$date);
        viewAcceuil();
    }

}
function connexion(){
        session_start();

        if($_POST["email"] && $_POST["psw"]){
            $email=htmlspecialchars($_POST["email"]);
            $psw=htmlspecialchars($_POST["psw"]);
            testconnexion($email,$psw);
        }
}
function deconnexion(){
        session_abort();
        viewAcceuil();

}