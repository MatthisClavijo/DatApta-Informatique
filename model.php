<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=site_app;charset=utf8', 'root', '');
        return $db;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function InsertUser($nom, $prenom, $mdp,$email,$date_de_naissance)
{

    $photo=NULL;
    $message=NULL;
    $db = dbConnect();

    $req = $db->prepare("INSERT INTO 'client'(nom,prénom,Adresse mail,date_de_naissance,mot de passe,photo,Message) VALUES(:nom, :prenom, :email, :date_de_naissance , :mdp, :photo, :message)");

    $req->bindParam("nom", $nom);
    $req->bindParam("prenom", $prenom);
    $req->bindParam("email", $email);
    $req->bindParam("date_de_naissance", $date_de_naissance);
    $req->bindParam("mdp", $mdp);
    $req->bindParam("photo",$photo);
    $req->bindParam("message",$message);

    $req->execute();
    $req->closeCursor();
}