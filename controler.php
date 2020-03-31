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