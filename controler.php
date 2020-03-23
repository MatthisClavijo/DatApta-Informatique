<?php
require "model.php";
function inscription(){
    require "PageDInscription.php";
}
function adduser( ){

    if ($_POST["nom"] && $_POST["email"] && $_POST["prénom"] && $_POST["password"] && $_POST["date"]){
        $nom=htmlspecialchars($_POST["nom"]);
        $email=htmlspecialchars($_POST["email"]);
        $prenom=htmlspecialchars($_POST["prénom"]);
        $mdp=htmlspecialchars($_POST["password"]);
        $date=htmlspecialchars($_POST["date"]);
        InsertUser($nom,$email,$prenom,$mdp,$date);
        inscription();
    }

}